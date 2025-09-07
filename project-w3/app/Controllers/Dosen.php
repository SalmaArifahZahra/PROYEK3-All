<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Dosen extends BaseController
{
    public function display()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $model = new Mahasiswa();
        $data = [
            'title' => 'Home',
            'content' => 'home_view'
        ];

        return view('layout/layout', $data);
    }
}
