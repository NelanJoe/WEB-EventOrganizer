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

    public function delete($id)
    {
        if (!$id = $this->pendaftaranModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Pendaftaran dengan {$id} tidak ditemukan");
        } else {
            $this->pendaftaranModel->delete($id);
            session()->setFlashdata('success_delete', 'Data berhasil dihapus');
            return redirect()->to('cms/pendaftaran')->with('success', 'Data berhasil dihapus');
        }
    }
}
