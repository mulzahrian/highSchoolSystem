<?php

namespace App\Controllers;

use App\Models\ProfileTeacherModel;

class ProfileTeacher extends BaseController
{
    public function index()
    {
        $model = new ProfileTeacherModel();

        $data['teachers'] = $model
            ->orderBy('organization_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileTeacher', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileTeacherModel();
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/teacher', $newName);

            $model->insert([
                'image'  => $newName,
                'name'   => $this->request->getPost('name'),
                'role'   => $this->request->getPost('role'),
                'detail' => $this->request->getPost('detail'),
            ]);
        }

        return redirect()->to(base_url('profile-teacher'));
    }

    public function delete($id)
    {
        $model = new ProfileTeacherModel();
        $data = $model->find($id);

        if ($data) {
            $path = 'uploads/teacher/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
            $model->delete($id);
        }

        return redirect()->to(base_url('profile-teacher'));
    }
}
