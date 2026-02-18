<?php

namespace App\Controllers;

use App\Models\AgenPerubahanModel;

class AgenPerubahan extends BaseController
{
    public function index()
    {
        $model = new AgenPerubahanModel();

        $data['rows'] = $model
            ->orderBy('agen_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/agen_perubahan', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new AgenPerubahanModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/agen_perubahan', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('agen_perubahan'));
    }

    public function update($id)
    {
        $model = new AgenPerubahanModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/agen_perubahan', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('agen_perubahan'));
    }

    public function delete($id)
    {
        $model = new AgenPerubahanModel();
        $model->delete($id);

        return redirect()->to(base_url('agen_perubahan'));
    }
}
