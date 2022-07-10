<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserAccountModel;

class User extends BaseController
{
    protected $userAccountModel;
    public function __construct()
    {
        $this->userAccountModel = new UserAccountModel();
    }
    public function index()
    {
        $data = [
            'users' => $this->userAccountModel->findAll(),
        ];
        return view('pages/master/user/index', $data);
    }

    public function detail($id)
    {
        if (!$user = $this->userAccountModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Username dengan {$id} tidak ditemukan");
        } else {
            $data = [
                'users' => $user,
            ];
            return view('pages/master/user/detail', $data);
        }
    }

    public function edit($id)
    {
        if (!$user = $this->userAccountModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Username dengan {$id} tidak ditemukan");
        } else {
            $data = [
                'users' => $user,
            ];
            return view('pages/master/user/edit', $data);
        }
    }


    public function update($id)
    {
        if ($this->validate(
            [
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required|min_length[3]|max_length[20]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'min_length' => '{field} harus lebih dari {param} karakter',
                        'max_length' => '{field} harus kurang dari {param} karakter',
                    ],
                ],
                'active' => [
                    'label' => 'Status',
                    'rules' => 'required|in_list[1,0]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'in_list' => '{field} harus diisi dengan benar',
                    ],
                ],
            ]
        )) {
            $data = [
                'username' => $this->request->getPost('username'),
                'active' => $this->request->getPost('active'),
            ];
            $this->userAccountModel->update($id, $data);
            return redirect()->to('cms/user');
        } else {
            return redirect()->to('cms/user/edit/' . $id);
        }
    }
}
