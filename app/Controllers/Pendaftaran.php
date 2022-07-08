<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftaranModel;

class Pendaftaran extends BaseController
{
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
    }

    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaranModel->findAll(),
        ];
        return view("pages/pendaftaran/index", $data);
    }
}
