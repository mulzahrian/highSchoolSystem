<?php

namespace App\Controllers;

use App\Models\ZonaIntegrasiModel;

class ZonaIntegrasi extends BaseController
{
    public function index()
    {
        $model = new ZonaIntegrasiModel();

        $data['rows'] = $model
            ->orderBy('zona_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/zona_integrasi', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ZonaIntegrasiModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/zona_integrasi', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('zona-integrasi'));
    }

    public function update($id)
    {
        $model = new ZonaIntegrasiModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/zona_integrasi', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('zona-integrasi'));
    }

    public function delete($id)
    {
        $model = new ZonaIntegrasiModel();
        $model->delete($id);

        return redirect()->to(base_url('zona-integrasi'));
    }
}
