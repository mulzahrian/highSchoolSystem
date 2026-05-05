<?php

namespace App\Controllers;

use App\Models\ProfileInfrastructureModel;

class ProfileInfrastructure extends BaseController
{
    public function index()
    {
        helper('text');
        $model = new ProfileInfrastructureModel();

        $data['infrastructures'] = $model
            ->orderBy('infrastructure_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileInfrastructure', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileInfrastructureModel();
        $file  = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/infrastructure', $newName);

            $model->insert([
                'image'  => $newName,
                'header' => $this->request->getPost('header'),
                'detail' => $this->request->getPost('detail'),
            ]);
        }

        return redirect()->to(base_url('profile-infrastructure'));
    }

    public function delete($id)
    {
        $model = new ProfileInfrastructureModel();
        $data  = $model->find($id);

        if ($data) {
            $path = 'uploads/infrastructure/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
            $model->delete($id);
        }

        return redirect()->to(base_url('profile-infrastructure'));
    }

    public function update($id)
{
    $model = new ProfileInfrastructureModel();
    $data  = $model->find($id);

    $file = $this->request->getFile('image');

    $updateData = [
        'header' => $this->request->getPost('header'),
        'detail' => $this->request->getPost('detail'),
    ];

    // kalau upload gambar baru
    if ($file && $file->isValid() && !$file->hasMoved()) {

        // hapus gambar lama
        if ($data && $data['image']) {
            $oldPath = 'uploads/infrastructure/' . $data['image'];
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $newName = $file->getRandomName();
        $file->move('uploads/infrastructure', $newName);

        $updateData['image'] = $newName;
    }

    $model->update($id, $updateData);

    return redirect()->to(base_url('profile-infrastructure'));
}
}
