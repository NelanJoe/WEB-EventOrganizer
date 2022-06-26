<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\JenisModel;

class JenisKegiatan extends BaseController
{
    protected $jenisModel;

    public function __construct()
    {
        $this->jenisModel = new JenisModel();
    }

    public function index()
    {
        $data = [
            'jenisKegiatan' => $this->jenisModel->getAll(),
        ];
        return view('pages/master/jenis-kegiatan/index', $data);
    }

    //    Buat fungsi untuk form tambah data
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pages/master/jenis-kegiatan/create');
    }

    //    Buat fungsi untuk menyimpan data kegiatan
    public function save()
    {
        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jenis-kegiatan/create')->withInput()->with('validation', $validation);
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];
        session()->setFlashdata('success_add', 'Data berhasil ditambahkan');
        $this->jenisModel->insertKegiatan($data);
        return redirect()->to('/jenis-kegiatan');
    }

    //    Buat fungsi untuk form detail data
    public function detail($id)
    {
        $data = [
            'kegiatan' => $this->jenisModel->getJenisId($id)
        ];
        if (empty($data['kegiatan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Jenis Kegiatan dengan {$id} tidak ditemukan");
        }
        return view('pages/master/jenis-kegiatan/detail', $data);
    }



    //    Buat fungsi untuk form edit data
    public function edit($id) {
        $data = [
            'kegiatan' => $this->jenisModel->getJenisId($id),
            'validation' => \Config\Services::validation()
        ];
        if (empty($data['kegiatan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Jenis Kegiatan dengan {$id} tidak ditemukan");
        }
        return view('pages/master/jenis-kegiatan/edit', $data);
    }

    //    Buat fungsi untuk update data kegiatan
    public function update() {
        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jenis-kegiatan/edit/' . $this->request->getPost('id'))->withInput()->with('validation', $validation);
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];
        session()->setFlashdata('success_update', 'Data berhasil diubah');
        $this->jenisModel->updateKegiatan($data, $this->request->getPost('id'));
        return redirect()->to('/jenis-kegiatan');
    }

    //    Buat fungsi untuk delete data
    public function delete($id) {
        $this->jenisModel->delete($id);
        session()->setFlashdata('success_delete', 'Data berhasil dihapus');
        return redirect()->to('/jenis-kegiatan');
    }
}
