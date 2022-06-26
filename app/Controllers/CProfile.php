<?php

namespace App\Controllers;

use App\Models\StoreModel;

class CProfile extends BaseController
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

            echo "Hello : " . $session->get('name');
            echo "<br>";
            echo "isLoggedIn : " . $session->get('isLoggedIn');
            echo "<br>";
            echo "<a href='csignin/logout'>Logout</a>";
            //return view('vhome', $data);
        }
    }
}
