<?php

namespace App\Controllers;

use App\Models\VideoProfileModel;

class VideoProfile extends BaseController
{
    public function index()
    {
        $model = new VideoProfileModel();

        $data['videos'] = $model
            ->orderBy('video_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/videoProfile', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new VideoProfileModel();

        $model->insert([
            'url' => $this->request->getPost('url'),
            'is_active' => 1
        ]);

        return redirect()->to(base_url('video-profile'));
    }

    public function update($id)
    {
        $model = new VideoProfileModel();

        $model->update($id, [
            'url' => $this->request->getPost('url'),
            'is_active' => $this->request->getPost('is_active')
        ]);

        return redirect()->to(base_url('video-profile'));
    }

    public function delete($id)
    {
        $model = new VideoProfileModel();
        $model->delete($id);

        return redirect()->to(base_url('video-profile'));
    }
}