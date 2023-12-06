<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index() {
        $nama = 'Muhammad Iqbal Gobel';
        $program_mbkm = 'Student Independen';
        $program_studi = 'Fullstack Web Developer';
        $mitra = 'GITS Indonesia';

        $data['nama'] = $nama;
        $data['program_mbkm'] = $program_mbkm;
        $data['program_studi'] = $program_studi;
        $data['mitra'] = $mitra;

        return view('profile/index', $data);
    }
}
