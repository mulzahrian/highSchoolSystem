<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('Layout/loginHeader') . view('auth/Login') . view('Layout/loginFooter');
    }
}
