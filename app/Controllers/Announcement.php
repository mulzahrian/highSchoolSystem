<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;

class Announcement extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new AnnouncementModel();
        $data['announcements'] = $model
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/announcement', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new AnnouncementModel();
        $file  = $this->request->getFile('thumbnail');

        $thumbnail = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $thumbnail = $file->getRandomName();
            $file->move('uploads/announcement', $thumbnail);
        }

        $model->insert([
            'year'      => $this->request->getPost('year'),
            'content'   => $this->request->getPost('content'),
            'thumbnail' => $thumbnail,
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('announcement'));
    }

    public function delete($id)
    {
        $model = new AnnouncementModel();
        $data  = $model->find($id);

        if ($data && $data['thumbnail']) {
            $path = 'uploads/announcement/' . $data['thumbnail'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);

        return redirect()->to(base_url('announcement'));
    }

    public function edit($id)
{
    $model = new AnnouncementModel();
    $data  = $model->find($id);

    if (!$data) {
        return redirect()->to(base_url('announcement'));
    }

    $file = $this->request->getFile('thumbnail');
    $thumbnail = $data['thumbnail'];

    if ($file && $file->isValid() && !$file->hasMoved()) {
        // hapus file lama
        if ($thumbnail && file_exists('uploads/announcement/' . $thumbnail)) {
            unlink('uploads/announcement/' . $thumbnail);
        }
        $thumbnail = $file->getRandomName();
        $file->move('uploads/announcement', $thumbnail);
    }

    $model->update($id, [
        'year'      => $this->request->getPost('year'),
        'content'   => $this->request->getPost('content'),
        'thumbnail' => $thumbnail,
        'is_active' => $this->request->getPost('is_active') ?? 0
    ]);

    return redirect()->to(base_url('announcement'));
}
}
