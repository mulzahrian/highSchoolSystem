<?php

namespace App\Controllers;

use App\Models\KtspModel;

class Ktsp extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new KtspModel();
        $data['ktsps'] = $model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ktsp', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new KtspModel();
        $file  = $this->request->getFile('image');

        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Image is required');
        }

        $imageName = $file->getRandomName();
        $file->move('uploads/ktsp', $imageName);

        $model->insert([
            'title'     => $this->request->getPost('title'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('ktsp'));
    }

    public function delete($id)
    {
        $model = new KtspModel();
        $data  = $model->find($id);

        if ($data && $data['image']) {
            $path = 'uploads/ktsp/' . $data['image'];
            if (file_exists($path)) unlink($path);
        }

        $model->delete($id);

        return redirect()->to(base_url('ktsp'));
    }
}
