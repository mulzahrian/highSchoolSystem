<?php

namespace App\Controllers;

use App\Models\ProfileTeacherDetailModel;

class ProfileTeacherDetail extends BaseController
{
    public function index()
    {
        $model = new ProfileTeacherDetailModel();

        // dropdown options
        $data['educations'] = [
            'SMA/SMK',
            'D3',
            'S1',
            'S2',
            'S3'
        ];

        $data['sexes'] = [
            'Laki-laki',
            'Perempuan'
        ];

        $data['levels'] = [
            'TK',
            'SD',
            'SMP',
            'SMA'
        ];

        $data['roles'] = [
            'Guru Kelas',
            'Guru Mata Pelajaran',
            'Wali Kelas',
            'Kepala Sekolah'
        ];

        $data['teachers'] = $model
            ->orderBy('teacher_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileTeacherDetail', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileTeacherDetailModel();
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/teacher_detail', $newName);

            $model->insert([
                'image'       => $newName,
                'name'        => $this->request->getPost('name'),
                'education'   => $this->request->getPost('education'),
                'sex'         => $this->request->getPost('sex'),
                'birth_date'  => $this->request->getPost('birth_date'),
                'level'       => $this->request->getPost('level'),
                'role'        => $this->request->getPost('role'),
            ]);
        }

        return redirect()->to(base_url('profile-teacher-detail'));
    }

    public function delete($id)
    {
        $model = new ProfileTeacherDetailModel();
        $data = $model->find($id);

        if ($data) {
            $path = 'uploads/teacher_detail/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
            $model->delete($id);
        }

        return redirect()->to(base_url('profile-teacher-detail'));
    }
}
