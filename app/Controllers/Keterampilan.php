<?php

namespace App\Controllers;

use App\Models\KeterampilanModel;

class Keterampilan extends BaseController
{
    public function index()
    {
        $model = new KeterampilanModel();

        $data['rows'] = $model
            ->orderBy('keterampilan_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/keterampilan', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new KeterampilanModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/keterampilan', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('keterampilan'));
    }

    public function update($id)
    {
        $model = new KeterampilanModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/keterampilan', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('keterampilan'));
    }

    public function delete($id)
    {
        $model = new KeterampilanModel();
        $model->delete($id);

        return redirect()->to(base_url('keterampilan'));
    }
}
