<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave()
    {
        $validation = $this->validate([
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        ]);

        return redirect()->to('/login')->with('success', 'Registration successful!');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getVar('email'))->first();

        if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
            session()->set('user', [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role'],
            ]);
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/user/dashboard');
            }
        }

        return redirect()->back()->with('error', 'Incorrect email or password!');
    }

    public function logout()
    {
        session()->remove('user');
        return redirect()->to('/login');
    }
}
