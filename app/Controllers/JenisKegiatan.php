<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class JenisKegiatan extends BaseController
{
    public function index()
    {
        return view('pages/master/jenis_kegiatan');
    }
}
