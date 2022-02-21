<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      echo '==================Klik Untuk Menuju Halaman Home===============';
      echo '<br>';
      return '<a href="https://www.educastudio.com/">Klik Di Sini !</a>';
    }
}
