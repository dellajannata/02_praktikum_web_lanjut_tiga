<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return '<a href="https://www.educastudio.com/program/karir">KARIR</a>';
    }
    public function magang(){
        return '<a href="https://www.educastudio.com/program/magang">MAGANG</a>';
    }
    public function kunjunganindustri(){
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">KUNJUNGAN INDUSTRI</a>';
    }
}
