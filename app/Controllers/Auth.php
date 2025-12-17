<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('Layout/loginHeader') . view('auth/Login') . view('Layout/loginFooter');
    }

    public function register()
    {
        return view('Layout/loginHeader') . view('auth/Register') . view('Layout/loginFooter');
    }
}
