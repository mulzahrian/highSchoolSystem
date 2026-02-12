<?php

namespace App\Controllers;

use App\Models\LimaBudayaModel;

class LimaBudaya extends BaseController
{
    public function index()
    {
        $model = new LimaBudayaModel();

        $data['rows'] = $model
            ->orderBy('lima_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/lima_budaya', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new LimaBudayaModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/lima-budaya', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('lima-budaya'));
    }

    public function update($id)
    {
        $model = new LimaBudayaModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/lima-budaya', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('lima-budaya'));
    }

    public function delete($id)
    {
        $model = new LimaBudayaModel();
        $model->delete($id);

        return redirect()->to(base_url('lima-budaya'));
    }
}
