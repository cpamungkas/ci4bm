<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class CSignup extends Controller
{
    public function index()
    {

        $data = [];
        $data['title'] = 'Registration | B.M Apps &copy; ' . date('Y');
        return view('vSignup', $data);
    }

    public function store()
    {
        helper(['form', 'url']);
        $rules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'username' => [
                'rules'  => 'required|min_length[3]|max_length[50]|is_unique[tb_user.username]',
                'errors' => [
                    'required' => 'You must choose a Username.',
                    'is_unique' => 'This Username is already taken.',
                    'min_length' => 'Username must be at least 3 characters.',
                    'max_length' => 'Username must be less than 50 characters.'
                ]
            ],
            'email'    => [
                'rules'  => 'required|valid_email|is_unique[tb_user.email]',
                'errors' => [
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_unique'   => 'This Email is already registered.'
                ]
            ],
            'password' => [
                'rules'  => 'required|trim|min_length[5]|max_length[25]|matches[passwordConfirm]|alpha_numeric',
                'errors' => [
                    'required' => 'You must enter a Password.',
                    'min_length' => 'Your Password must be at least 5 characters long.',
                    'max_length' => 'Your Password must be less than 25 characters long.',
                    'matches' => 'Your Password and Confirmation Password do not match.'
                ]
            ],
            'passwordConfirm' => [
                'rules'  => 'required|trim|min_length[5]|max_length[25]|matches[password]|alpha_numeric',
                'errors' => [
                    'required' => 'You must enter a Confirmation Password.',
                    'min_length' => 'Your Confirmation Password must be at least 5 characters long.',
                    'max_length' => 'Your Confirmation Password must be less than 25 characters long.',
                    'matches' => 'Your Password and Confirmation Password do not match.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            $data['title'] = 'Registration | B.M Apps &copy; ' . date('Y');
            $data['validation'] = $this->validator;
            return view('vSignup', $data);
        } else {
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'is_active' => 0,
                'role_id' => 2,
                'date_created' => time(),
                'date_updated' => time(),
                'date_deleted' => null,
                'status_deleted' => 0
            ];
            $userModel->insert($data);
            return redirect()->to('/');
        }



        // helper(['form']);
        // $rules = [
        //     'email'             => 'required|min_length[5]|max_length[200]|valid_email|is_unique[tb_user.email]',
        //     'password'          => 'required|min_length[5]|max_length[50]',
        //     'confirmpassword'   => 'matches[password]',
        //     'name'              => 'required|min_length[3]|max_length[100]',
        //     'username'          => 'required|min_length[3]|max_length[50]'
        // ];

        // if ($this->validate($rules)) {
        //     $userModel = new UserModel();
        //     $data = [
        //         'id' => '',
        //         'username'  => $this->request->getVar('username'),
        //         'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        //         'name'     => $this->request->getVar('name'),
        //         'email'    => $this->request->getVar('email'),
        //         'is_active' => 1,
        //         'role_id' => 1

        //     ];
        //     $userModel->save($data);
        //     return redirect()->to('/Home');
        // } else {
        //     $data['validation'] = $this->validator;
        //     echo view('vSignup', $data);
        // }
    }
}
