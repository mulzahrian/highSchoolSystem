<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['rows'] = $model
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/user', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new UserModel();

        $model->insert([
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
        ]);

        return redirect()->to(base_url('user'));
    }

    public function update($id)
    {
        $model = new UserModel();

        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        // ✅ update password hanya jika diisi
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $model->update($id, $data);

        return redirect()->to(base_url('user'));
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to(base_url('user'));
    }
}