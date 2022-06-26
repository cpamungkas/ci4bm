<?php

namespace App\Controllers;

class cWorker extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            $data['title'] = 'Log In | B.M Apps &copy; Gramedia ' . date('Y');
            return view('vLogin', $data);
        } else {
            $data['title'] = 'Dashboard | B.M Apps &copy; Gramedia ' . date('Y');
            $data['isLoggedIn'] = $session->get('isLoggedIn');
            $data['id'] = $session->get('id');
            $data['username'] = $session->get('username');
            $data['name'] = $session->get('name');
            $data['email'] = $session->get('email');
            $data['image'] = $session->get('image');
            $data['is_active'] = $session->get('is_active');
            $data['role_id'] = $session->get('role_id');
            $data['date_created'] = $session->get('date_created');
            $data['status_deleted'] = $session->get('status_deleted');
            return view('vWorker', $data);
        }
    }
}
