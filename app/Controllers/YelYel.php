<?php

namespace App\Controllers;

use App\Models\YelYelModel;

class YelYel extends BaseController
{
    public function index()
    {
        $model = new YelYelModel();

        $data['rows'] = $model
            ->orderBy('yel_yel', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/yel_yel', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new YelYelModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/yel_yel', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('yel-yel'));
    }

    public function update($id)
    {
        $model = new YelYelModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/yel_yel', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('yel-yel'));
    }

    public function delete($id)
    {
        $model = new YelYelModel();
        $model->delete($id);

        return redirect()->to(base_url('yel-yel'));
    }
}
