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
        $data = [

            'kegiatan' => $this->kegiatan->findAll(),
        ];

        return view('pages/kegiatan/index', $data);
    }

    public function listPublic()
    {

        $data = [
            'kegiatan' => $this->kegiatan->findAll(),
        ];

        return view('pages/landing-page/index', $data);
    }

    public function detailPublic($id = null)
    {
        $data = [
            'detailKegiatan' => $this->kegiatan->find($id),
        ];



        return view('pages/detail_kegiatan', $data);
    }
}
