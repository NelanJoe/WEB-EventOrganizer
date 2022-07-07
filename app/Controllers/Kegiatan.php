<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{

    protected $kegiatan;

    function __construct()
    {
        $this->kegiatan = new KegiatanModel();
    }

    public function index()
    {
        return view('pages/kegiatan');
    }

    public function listPublic()
    {

        $data = [
            'kegiatan' => $this->kegiatan->findAll(),
        ];

        return view('pages/daftar_kegiatan', $data);
    }

    public function detailPublic($id = null)
    {
        $data = [
            'detailKegiatan' => $this->kegiatan->find($id),
        ];



        return view('pages/detail_kegiatan', $data);
    }
}
