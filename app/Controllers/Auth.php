<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('Layout/loginHeader')
            . view('auth/Login')
            . view('Layout/loginFooter');
    }

     public function loginProcess()
    {
        $userModel = new UserModel();
        $session = session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not registered');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Wrong password');
        }

        // set session
        $session->set([
            'user_id'   => $user['id'],
            'user_name' => $user['name'],
            'user_email'=> $user['email'],
            'isLoggedIn'=> true
        ]);

        return redirect()->to('/menu');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }

    public function register()
    {
        return view('Layout/loginHeader')
            . view('auth/Register')
            . view('Layout/loginFooter');
    }

    public function registerProcess()
    {
        $userModel = new UserModel();

        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ];

        // simple validation
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel->insert($data);

        return redirect()->to('/auth')->with('success', 'Register success, now login 🔥');
    }
}
