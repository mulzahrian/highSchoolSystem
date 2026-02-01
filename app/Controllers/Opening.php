<?php

namespace App\Controllers;

use App\Models\OpeningModel;

class Opening extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new OpeningModel();

        $data['opening'] = $model
            ->orderBy('opening_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/opening', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new OpeningModel();
        $file  = $this->request->getFile('image');

        $image = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $image = $file->getRandomName();
            $file->move('uploads/opening', $image);
        }

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'image'     => $image,
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('opening'));
    }

    public function delete($id)
    {
        $model = new OpeningModel();
        $data  = $model->find($id);

        if ($data && $data['image']) {
            $path = 'uploads/opening/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);

        return redirect()->to(base_url('opening'));
    }
}
