<?php

namespace App\Controllers;

use App\Models\BimbinganKarirModel;

class BimbinganKarir extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new BimbinganKarirModel();
        $data['bimbingans'] = $model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/bimbinganKarir', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new BimbinganKarirModel();
        $file  = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Image is required');
        }

        $imageName = $file->getRandomName();
        $file->move('uploads/bimbingan-karir', $imageName);

        $model->insert([
            'title'     => $this->request->getPost('title'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('bimbingan-karir'));
    }

    public function delete($id)
    {
        $model = new BimbinganKarirModel();
        $data  = $model->find($id);

        if ($data && $data['image']) {
            $path = 'uploads/bimbingan-karir/' . $data['image'];
            if (file_exists($path)) unlink($path);
        }

        $model->delete($id);

        return redirect()->to(base_url('bimbingan-karir'));
    }
}
