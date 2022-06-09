<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CProfile extends Controller
{
    public function index()
    {
        $data['title'] = 'Home | B.M Apps &copy;' . date('Y');
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/Home');
        } else {
            echo "Hello : " . $session->get('name');
            echo "<br>";
            echo "isLoggedIn : " . $session->get('isLoggedIn');
            echo "<br>";
            echo "<a href='csignin/logout'>Logout</a>";
            //return view('vhome', $data);
        }
    }
}
