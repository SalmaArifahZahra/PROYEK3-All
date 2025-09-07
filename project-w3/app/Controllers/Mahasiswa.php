<?php

namespace App\Controllers;

use App\Models\Mahasiswa as ModelsMahasiswa;
use PhpParser\Node\Expr\AssignOp\Mod;

class Mahasiswa extends BaseController
{
    public function indexMahasiswa()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $model = new ModelsMahasiswa();
        $datas = $model->getMahasiswa();

        $data = [
            'title' => 'Home',
            'content' => 'display_mahasiswa',
            'mahasiswas' => $datas
        ];

        return view('layout/layout', $data);
    }

    public function detail($nim)
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        $model = new ModelsMahasiswa();
        $data = $model->where('nim', $nim)->first();

        $data = [
            'title' => 'Home',
            'content' => 'detail_mahasiswa',
            'mahasiswa' => $data
        ];

        return view('layout/layout', $data);
    }

    public function tampilForm()
    {
        return view('validasi-form'); 
    }


}
