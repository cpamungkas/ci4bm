<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\StoreModel;

class CStore extends BaseController
{
    public function index()
    {
        $data = [];
        $session = session();
        if (!$session->get('isLoggedIn')) {
            $data['title'] = 'Log In | B.M Apps &copy; Gramedia ' . date('Y');
            return view('vLogin', $data);
        } else {
            $data['title'] = 'Store Setup | B.M Apps &copy; Gramedia ' . date('Y');
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
            $data['tablestore'] = (new StoreModel())->getDataALl();  //(new SalesdailyModel())->getDataAll();
            return view('vStore', $data);
        }
    }

    public function saveStore()
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
            helper(['form', 'url']);
            $rules = [
                'storename' => [
                    'rules' => 'required|trim|is_unique[tb_store.StoreName]',
                    'errors' => [
                        'required' => 'You must enter a Store Name'
                    ]
                ],
                'storecode' => [
                    'rules'  => 'required|trim|is_unique[tb_store.StoreCode]',
                    'errors' => [
                        'required' => 'You must enter a Store Code',
                        'is_unique' => 'This Code is already taken.'
                    ]
                ],
                'idpln2'    => [
                    'rules'  => 'required|trim|alpha_numeric|is_unique[tb_store.idPLN1]',
                    'errors' => [
                        'required' => 'You must enter id PLN 1.',
                        'is_unique'   => 'This id PLN is already registered.'
                    ]
                ],
                'idpln2' => [
                    'rules'  => 'required|trim|alpha_numeric',
                    'errors' => [
                        'required' => 'You must enter id PLN 2.'
                    ]
                ],
            ];

            if (!$this->validate($rules)) {
                $data['title'] = 'Store Setup | B.M Apps &copy; Gramedia ' . date('Y');
                $data['validation'] = $this->validator;
                $data['tablestore'] = (new StoreModel())->getDataALl();
                return view('vStore', $data);
            } else {
                $StoreModel = new StoreModel();
                $data = [
                    'StoreName' => $this->request->getPost('storename'),
                    'StoreCode' => $this->request->getPost('storecode'),
                    'KWHMeter1' => $this->request->getVar('kwhmeter1'),
                    'KWHMeter2' => $this->request->getVar('kwhmeter2'),
                    'idPLN1' => $this->request->getPost('idpln1'),
                    'idPLN2' => $this->request->getPost('idpln2'),
                    'date_created' => time(),
                    'date_updated' => time(),
                    'status_deleted' => 0
                ];
                $StoreModel->insert($data);

                return redirect()->to('/store');
                //echo "Save Data";
            }
        }
    }
}
