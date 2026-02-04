<?php

namespace App\Controllers;

use App\Models\OpeningModel;
use App\Models\ProfileVisionMissionModel;
use App\Models\ProfileHistoryModel;
use App\Models\NewsModel;


class Berita extends BaseController
{
    public function index(): string
    {
        $newsModel = new NewsModel();
        
        helper('text');

        
        $data['news'] = $newsModel
            ->where('is_active', 1)
            ->orderBy('news_id', 'DESC')
            ->findAll(6); // bebas, 4 / 6 / 8 sesuai layout


        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/berita', $data);
    }
}
