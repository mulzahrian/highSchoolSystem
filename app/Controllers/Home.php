<?php

namespace App\Controllers;

use App\Models\OpeningModel;
use App\Models\ProfileVisionMissionModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Opening (hero)
        $openingModel = new OpeningModel();
        $data['opening'] = $openingModel
            ->where('is_active', 1)
            ->orderBy('opening_id', 'DESC')
            ->first();

        // Vision & Mission
        $vmModel = new ProfileVisionMissionModel();

        $data['vision'] = $vmModel
            ->where('type', 'visi')
            ->orderBy('id', 'DESC')
            ->first();

        $data['mission'] = $vmModel
            ->where('type', 'misi')
            ->orderBy('id', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('PageOut/home', $data);
    }
}
