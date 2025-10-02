<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //{
    // Function 1: Tabel
    public function getTabel()
    {
        $mahasiswa = [
            ['no' => 1, 'nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['no' => 2, 'nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('tabel', ['mahasiswa' => $mahasiswa]);
    }

    // Function 2: Form
    public function getForm()
    {
        return view('form');
    }
}
