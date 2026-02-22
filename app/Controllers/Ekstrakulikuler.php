<?php

namespace App\Controllers;

use App\Models\EkstrakulikulerModel;

class Ekstrakulikuler extends BaseController
{
    public function index()
    {
        $model = new EkstrakulikulerModel();

        $data['rows'] = $model
            ->orderBy('ekstrakulikuler_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ekstrakulikuler', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new EkstrakulikulerModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/ekstrakulikuler', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('ekstrakulikuler'));
    }

    public function update($id)
    {
        $model = new EkstrakulikulerModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/ekstrakulikuler', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('ekstrakulikuler'));
    }

    public function delete($id)
    {
        $model = new EkstrakulikulerModel();
        $model->delete($id);

        return redirect()->to(base_url('ekstrakulikuler'));
    }

    public function detail($id)
    {
        $model = new EkstrakulikulerModel();

        $data['ekskul'] = $model
            ->where('ekstrakulikuler_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['ekskul']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/ekstrakulikuler_detail', $data)
            . view('Layout/HomeFooter');
    }
}
