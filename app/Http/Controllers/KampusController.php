<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    //
    public function info_kampus() {
        $univ = "Universitas Jember";
        $fakultas = "Fakultas Ilmu Komputer";
        $alamat = "Jl. Kalimantan No.37, Kabupaten Jember, Jawa Timur 68121";
        $telepon = "(0331) 326911";
        $prodi1 = "Sistem Informasi";
        $prodi2 = "Teknologi Informasi";
        $prodi3 = "Informatika";
        return view('component.content.info-kampus', compact('univ','fakultas','alamat','telepon','prodi1','prodi2','prodi3'));
    }
}
