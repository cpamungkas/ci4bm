<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class CSignin extends Controller
{
    public function index()
    {
        helper(['form']);
        $data['title'] = 'Log In | B.M Apps &copy; ' . date('Y');
        return view('vLogin', $data);
    }

    public function loginAuth()
    {
        helper(['form', 'url']);
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // $email = $this->request->getVar('email');
        // $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'image' => $data['image'],
                    'is_active' => $data['is_active'],
                    'role_id' => $data['role_id'],
                    'date_created' => $data['date_created'],
                    'date_updated' => $data['date_updated'],
                    'date_deleted' => $data['date_deleted'],
                    'status_deleted' => $data['status_deleted'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                if ($session->get('role_id') == 99) {
                    return redirect()->to('/admin');
                } elseif ($session->get('role_id') == 1) {
                    return redirect()->to('/superintendent');
                    // return redirect()->to('/Home');
                } elseif ($session->get('role_id') == 2) {
                    return redirect()->to('/worker');
                } else {
                    return redirect()->to('/');
                }
                // return redirect()->to('/Home');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect!');
                return redirect()->to('/Home');
            }
        } else {
            $session->setFlashData('msg', 'Email does not exit');
            return redirect()->to('/Home');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    }
}
