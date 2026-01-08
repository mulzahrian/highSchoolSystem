<?php

namespace App\Controllers;

use App\Models\ProfileLocationModel;

class ProfileLocation extends BaseController
{
    public function index()
    {
        $model = new ProfileLocationModel();

        $data['locations'] = $model
            ->orderBy('location_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/profileLocation', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new ProfileLocationModel();

        $model->insert([
            'link' => $this->request->getPost('link')
        ]);

        return redirect()->to(base_url('profile-location'));
    }

    public function delete($id)
    {
        $model = new ProfileLocationModel();
        $model->delete($id);

        return redirect()->to(base_url('profile-location'));
    }
}
