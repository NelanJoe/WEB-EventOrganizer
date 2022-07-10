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

        if (!$this->validate([
            'alasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->daftar->insert([
            'tanggal_daftar' => date('Y-m-d'),
            'alasan' => $this->request->getVar('alasan'),
            'users_id' => user()->id,
            'kegiatan_id' => 1,
            'kategori_peserta_id' => $this->request->getVar('kategoriPesertaId'),
            'nosertifikat' => $this->request->getVar('nosertifikat'),
            'status' => 1,
        ]);

        session()->setFlashdata('message', 'Pendaftaran Berhasil');

        return redirect()->to('/');
    }

    public function delete()
    {
        $this->daftar->delete($this->request->getVar('id'));
        session()->setFlashdata('message', 'Pendaftaran Berhasil Dihapus');
        return redirect()->to('/');
    }
}
