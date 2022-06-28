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
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[jenis_kegiatan.nama]',
                'errors' => [
                    'required' => 'Field {field} harus diisi',
                    'is_unique' => 'Field {field} sudah ada',
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $data = [
                'nama' => $this->request->getPost('nama')
            ];
            $this->jenisModel->insert($data);
            session()->setFlashdata('success_add', 'Data berhasil ditambahkan');
            return redirect()->to('/jenis-kegiatan');
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
            'nama' => [
                'rules' => 'required|is_unique[jenis_kegiatan.nama]',
                'errors' => [
                    'required' => 'Field {field} Harus diisi',
                    'is_unique' => 'Field {field} Sudah ada',
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
            ];
            $this->jenisModel->update($id, $data);
            session()->setFlashdata('success_update', 'Data berhasil diubah');
            return redirect()->to('/jenis-kegiatan');
        }
    }
}
