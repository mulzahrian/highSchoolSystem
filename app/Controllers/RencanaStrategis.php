<?php

namespace App\Controllers;

use App\Models\PlanStrategicModel;

class RencanaStrategis extends BaseController
{
    public function index()
    {
        $model = new PlanStrategicModel();

        $data['plans'] = $model
            ->where('is_active', 1)
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/rencana_strategis', $data)
            . view('Layout/HomeFooter');
    }

    public function detail($id)
    {
        $model = new PlanStrategicModel();

        $data['plan'] = $model
            ->where('plan_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['plan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/rencana_strategis_detail', $data)
            . view('Layout/HomeFooter');
    }

    public function update($id)
{
    $model = new PlanStrategicModel();
    $data  = $model->find($id);

    $file = $this->request->getFile('thumbnail');

    $updateData = [
        'year'      => $this->request->getPost('year'),
        'content'   => $this->request->getPost('content'),
        'is_active' => $this->request->getPost('is_active') ? 1 : 0,
    ];

    // kalau upload thumbnail baru
    if ($file && $file->isValid() && !$file->hasMoved()) {

        // hapus thumbnail lama
        if ($data && $data['thumbnail']) {
            $oldPath = 'uploads/plan_strategic/' . $data['thumbnail'];
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $newName = $file->getRandomName();
        $file->move('uploads/plan_strategic', $newName);

        $updateData['thumbnail'] = $newName;
    }

    $model->update($id, $updateData);

    return redirect()->to(base_url('plan-strategic'));
}
}
