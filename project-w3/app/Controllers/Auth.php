<?php

namespace App\Controllers;

use App\Models\Admin;

class Auth extends BaseController
{
    public function loginIndex()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/home');
        }
        return view("auth/login");
    }

    public function loginAction()
    {
        $model = new Admin();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $model->where('username', $username)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
            session()->set([
                'id' => $admin['id'],
                'username' => $admin['username'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/home');
        } else {
            return redirect()->back()->with('error', 'Password salah.');
        }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }
            
        //     if ($password === $admin['password']) {
        //         session()->set([
        //             'id' => $admin['id'],
        //             'username' => $admin['username'],
        //             'isLoggedIn' => true
        //         ]);
        //         return redirect()->to('/home');
        //     } else {
        //         return redirect()->back();
        //     }
        // } else {
        //     return redirect()->back();
        // }
    }

    public function registerIndex(){
        return view("auth/register");
    }

public function registerAction()
{
    $model = new Admin();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password'); 

    // Pengecekan
    if ($model->where('username', $username)->first()) {
        return redirect()->back()->with('error', 'Username sudah dipakai, silakan pilih yang lain.');
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $data = [
        'username' => $username,
        'password' => $hashedPassword
    ];

    $model->save($data);

    return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
}

    public function logoutAction()
    {
        session()->destroy();
        return redirect()->to('/');
    }

}
?>