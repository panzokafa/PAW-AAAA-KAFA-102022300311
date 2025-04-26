<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'Kafa',
            'nim' => '102022300311',
            'email' => 'husnakafa@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'FRI',
            'foto' => asset('images/1kafa.jpeg')
        ];

        return view('profil',['mahasiswa' => $mahasiswa ] );
    }
}
