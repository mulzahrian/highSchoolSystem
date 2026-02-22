<?php

namespace App\Controllers;

use App\Models\LayananMadrasahModel;

class LayananMadrasah extends BaseController
{
    public function index()
    {
        $model = new LayananMadrasahModel();

        $data['rows'] = $model
            ->orderBy('layanan_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/layanan_madrasah', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new LayananMadrasahModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/layanan-madrasah', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('layanan-madrasah'));
    }

    public function update($id)
    {
        $model = new LayananMadrasahModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/layanan-madrasah', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('layanan-madrasah'));
    }

    public function delete($id)
    {
        $model = new LayananMadrasahModel();
        $model->delete($id);

        return redirect()->to(base_url('layanan-madrasah'));
    }

    public function detail($id)
    {
        $model = new LayananMadrasahModel();

        $data['layanan'] = $model
            ->where('layanan_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['layanan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/layanan_madrasah_detail', $data)
            . view('Layout/HomeFooter');
    }
}
