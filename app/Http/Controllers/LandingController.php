<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function profile() {
        $name = "Mohammad Rendy Firmansyah";
        $age = 20;
        $prodi = "Informatika";
        $univ = "Universitas Jember";
        $moto = "Berani ambil risiko, bermimpi besar, dan berharap besar";
        return view('component.content.profile', compact('name','age', 'prodi', 'univ', 'moto'));
    }
}
