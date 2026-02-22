<?php

namespace App\Controllers;

use App\Models\ProfileVisionMissionModel;
class VisionMission extends BaseController
{
    public function index(): string
    {
        $model = new ProfileVisionMissionModel();

        // SELECT TOP 1 (latest data)
        $data['vision_mission'] = $model
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileVisionMision', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileVisionMissionModel();

        $model->insert([
            'type' => $this->request->getPost('type'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to(base_url('vision-mission'));
    }

    public function edit($id)
{
    $model = new ProfileVisionMissionModel();
    $data  = $model->find($id);

    if (!$data) {
        return redirect()->to(base_url('vision-mission'));
    }

    $model->update($id, [
        'type'    => $this->request->getPost('type'),
        'content' => $this->request->getPost('content'),
    ]);

    return redirect()->to(base_url('vision-mission'));
}
}
