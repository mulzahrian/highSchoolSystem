<?php

namespace App\Controllers;

use App\Models\OpeningModel;
use App\Models\ProfileVisionMissionModel;
use App\Models\ProfileHistoryModel;
use App\Models\NewsModel;


class Home extends BaseController
{
    public function index(): string
    {
        // Opening
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

        // History (Timeline)
        $historyModel = new ProfileHistoryModel();
        $data['histories'] = $historyModel
            ->orderBy('tahun', 'ASC')
            ->findAll();

        $newsModel = new NewsModel();
        // Highlight (1 data terbaru)
        $data['news_highlight'] = $newsModel
            ->where('type', 'highlight')
            ->where('is_active', 1)
            ->orderBy('news_id', 'DESC')
            ->first();

        // Normal (max 4 biar pas layout)
        $data['news_normal'] = $newsModel
            ->where('type', 'normal')
            ->where('is_active', 1)
            ->orderBy('news_id', 'DESC')
            ->findAll(4);
        
        helper('text');

        
        $data['news'] = $newsModel
            ->where('is_active', 1)
            ->orderBy('news_id', 'DESC')
            ->findAll(6); // bebas, 4 / 6 / 8 sesuai layout


        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/home', $data);
    }
}
