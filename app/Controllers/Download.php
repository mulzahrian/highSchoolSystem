<?php

namespace App\Controllers;

use App\Models\DownloadModel;

class Download extends BaseController
{
    public function index()
    {
        $model = new DownloadModel();

        $data['rows'] = $model
            ->orderBy('agen_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/download', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new DownloadModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/download', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('download'));
    }

    public function update($id)
    {
        $model = new DownloadModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/download', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('download'));
    }

    public function delete($id)
    {
        $model = new DownloadModel();
        $model->delete($id);

        return redirect()->to(base_url('download'));
    }
}