<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriPesertaModel;
use App\Models\DaftarModel;

class Daftar extends BaseController
{

    protected $kategoriPeserta;
    protected $daftar;

    function __construct()
    {
        $this->kategoriPeserta = new KategoriPesertaModel();
        $this->daftar = new DaftarModel();
    }

    public function index()
    {
        //
    }

    public function publicView()
    {

        $data = [
            'kategoriPeserta' => $this->kategoriPeserta->findAll(),
        ];


        return view('pages/daftar', $data);
    }

    // function store daftar
    public function store()
    {

        // if (!$this->validate([
        //     'nama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        // ])) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // }

        $this->daftar->insert([
            'tanggal_daftar' => date('Y-m-d'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => user()->id,
            'kegiatan_id' => 1,
            'nosertifikat' => "bacot",
            'status' => 1,
        ]);

        return redirect()->to('/cms');
    }
}
