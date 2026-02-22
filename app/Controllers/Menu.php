<?php

namespace App\Controllers;

use App\Models\ProfileHistoryModel;

class Menu extends BaseController
{
    public function index()
    {
        $model = new ProfileHistoryModel();

        // SELECT TOP 1 (latest data)
        $data['history'] = $model
            ->orderBy('history_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/dashboard', $data)
            . view('Layout/footer');
    }

    public function store()
    {
        $model = new ProfileHistoryModel();

        $file = $this->request->getFile('image');
        $imageName = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $imageName);
        }

        $model->insert([
            'image'   => $imageName,
            'tahun' => $this->request->getPost('tahun'),
            'history' => $this->request->getPost('history'),
        ]);

        return redirect()->to(base_url('menu'));
    }

    public function delete($id)
    {
        $model = new ProfileHistoryModel();

        // optional: hapus file image juga
        $data = $model->find($id);
        if ($data && $data['image']) {
            $path = ROOTPATH . 'public/uploads/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);
        return redirect()->to(base_url('menu'));

    }

    public function edit($id)
{
    $model = new ProfileHistoryModel();
    $data  = $model->find($id);

    if (!$data) {
        return redirect()->to(base_url('menu'));
    }

    $file = $this->request->getFile('image');
    $imageName = $data['image'];

    if ($file && $file->isValid() && !$file->hasMoved()) {
        // hapus file lama
        if ($imageName && file_exists(ROOTPATH . 'public/uploads/' . $imageName)) {
            unlink(ROOTPATH . 'public/uploads/' . $imageName);
        }
        $imageName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads', $imageName);
    }

    $model->update($id, [
        'image'   => $imageName,
        'tahun'   => $this->request->getPost('tahun'),
        'history' => $this->request->getPost('history'),
    ]);

    return redirect()->to(base_url('menu'));
}
}
