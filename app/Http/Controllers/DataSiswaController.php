<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {
        $nama = 'Priyadi Sentosa';
        return $nama;
    }

    public function datasiswi()
    {
        $nama = 'Ajeng';
        return $nama;
    }
    public function nama($nama = 'Teu boga ngaran')
    {
        return 'Nama Saya Adalah : ' .$nama;
    }
}
