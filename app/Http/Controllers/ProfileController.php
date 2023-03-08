<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Muhammad Endar Darmawan')
            ->with('short_name', 'Endar')
            ->with('nim', '2141720160')
            ->with('absen', '18')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'endarmuhammad38@gmail.com')
            ->with('nohp', '089516824205')
            ->with('ig', '@muhammad_endar');
    }
}
