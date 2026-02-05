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
}
