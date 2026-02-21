<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();

        $data['rows'] = $model
            ->orderBy('artikel_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/artikel', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ArtikelModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/artikel', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('artikel'));
    }

    public function update($id)
    {
        $model = new ArtikelModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/artikel', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('artikel'));
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);

        return redirect()->to(base_url('artikel'));
    }
}