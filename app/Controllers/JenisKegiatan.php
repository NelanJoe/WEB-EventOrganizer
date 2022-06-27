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

    // buat fungsi index
    public function index()
    {
        $data = [
            'title' => 'Jenis Kegiatan',
            'jenis' => $this->jenisModel->findAll(),
        ];
        return view('pages/master/jenis-kegiatan/index', $data);
    }

    // buat fungsi detail
    public function detail($id)
    {
        // if with throw
        if (!$jenis = $this->jenisModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Jenis Kegiatan dengan {$id} tidak ditemukan");
        } else {
            $data = [
                'title' => 'Detail Jenis Kegiatan',
                'jenis' => $jenis,
            ];
            return view('pages/master/jenis-kegiatan/detail', $data);
        }
    }

    // buat fungsi create
    public function create()
    {
        $data = [
            'title' => 'Tambah Jenis Kegiatan',
        ];
        return view('pages/master/jenis-kegiatan/create', $data);
    }

    // buat fungsi store
    public function store()
    {
        if ($this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'nama' => $this->request->getPost('nama'),
            ];
            session()->setFlashdata('success_add', 'Data berhasil ditambahkan');
            $this->jenisModel->insert($data);
            return redirect()->to('/jenis-kegiatan');
        } else {
            return redirect()->to('/jenis-kegiatan/create');
        }
    }

    // buat fungsi delete
    public function delete($id = null)
    {
        if (!$id = $this->jenisModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Jenis Kegiatan dengan {$id} tidak ditemukan");
        } else {
            $this->jenisModel->delete($id);
            session()->setFlashdata('success_delete', 'Data berhasil dihapus');
            return redirect()->to('/jenis-kegiatan')->with('success', 'Data berhasil dihapus');
        }
    }


    // buat fungsi edit
    public function edit($id = null)
    {

        $data = [
            'title' => 'Edit Jenis Kegiatan',
            'jenis' => $this->jenisModel->find($id),
        ];

        return view('pages/master/jenis-kegiatan/edit', $data);
    }

    // buat fungsi update
    public function update($id = null)
    {
        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
        ])) {
            return redirect()->to('/jenis-kegiatan/edit/' . $id)->withInput()->with('error', $this->validator->getErrors());
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];
        session()->setFlashdata('success_update', 'Data berhasil diubah');
        $this->jenisModel->update($id, $data);
        return redirect()->to('/jenis-kegiatan')->with('success', 'Data berhasil diubah');
    }
}
