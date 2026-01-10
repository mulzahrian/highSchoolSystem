<?php

namespace App\Controllers;

use App\Models\PlanStrategicModel;

class PlanStrategic extends BaseController
{
    public function index()
    {
        helper('text');

        $model = new PlanStrategicModel();
        $data['plans'] = $model
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/plan_strategic', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PlanStrategicModel();
        $file  = $this->request->getFile('thumbnail');

        $thumbnail = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $thumbnail = $file->getRandomName();
            $file->move('uploads/plan_strategic', $thumbnail);
        }

        $model->insert([
            'year'      => $this->request->getPost('year'),
            'content'   => $this->request->getPost('content'),
            'thumbnail' => $thumbnail,
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('plan-strategic'));
    }

    public function delete($id)
    {
        $model = new PlanStrategicModel();
        $data  = $model->find($id);

        if ($data && $data['thumbnail']) {
            $path = 'uploads/plan_strategic/' . $data['thumbnail'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);

        return redirect()->to(base_url('plan-strategic'));
    }
}
