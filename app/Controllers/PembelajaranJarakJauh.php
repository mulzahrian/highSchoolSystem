<?php

namespace App\Controllers;

use App\Models\PembelajaranJarakJauhModel;

class PembelajaranJarakJauh extends BaseController
{
    public function index()
    {
        $model = new PembelajaranJarakJauhModel();

        $data['rows'] = $model
            ->orderBy('pembelajaran_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/pjj', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PembelajaranJarakJauhModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/pjj', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active'),
        ]);

        return redirect()->to(base_url('pjj'));
    }

    public function update($id)
    {
        $model = new PembelajaranJarakJauhModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/pjj', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('pjj'));
    }

    public function delete($id)
    {
        $model = new PembelajaranJarakJauhModel();
        $model->delete($id);

        return redirect()->to(base_url('pjj'));
    }
}
