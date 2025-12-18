<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/dashboard')
            . view('Layout/footer');
    }
}