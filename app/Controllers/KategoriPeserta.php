<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KategoriPeserta extends BaseController
{
    public function index()
    {
        return view('pages/master/kategori_peserta');
    }
}
