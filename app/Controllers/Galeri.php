<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class Galeri extends BaseController
{
    public function index()
    {
        $model = new GaleriModel();

        $data['rows'] = $model
            ->orderBy('galeri_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/galeri', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new GaleriModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/galeri', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('galeri'));
    }

    public function update($id)
    {
        $model = new GaleriModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/galeri', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('galeri'));
    }

    public function delete($id)
    {
        $model = new GaleriModel();
        $model->delete($id);

        return redirect()->to(base_url('galeri'));
    }
}