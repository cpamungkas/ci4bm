<?php

namespace App\Controllers;

class Home extends BaseController
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
			if ($session->get('role_id') == 99) {
				return view('vAdmin', $data); /* Admin All Akses*/
			} else if ($session->get('role_id') == 1) {
				return view('vSuperintendent', $data); /* Superintendent All Akses*/
			} else if ($session->get('role_id') == 2) {
				return view('vWorker', $data); /* Worker Akses (input data & view)*/
			}
			// return view('vHome', $data);
		}
	}

	public function admin()
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
			if ($session->get('role_id') == 99) {
				return view('vAdmin', $data); /* Admin All Akses*/
			} else {
				echo "Access Denied";
			}
			// return view('vHome', $data);
		}
	}

	public function superintendent()
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
			if ($session->get('role_id') == 1) {
				$data['status_deleted'] = $session->get('status_deleted');
				return view('vSuperintendent', $data); /* Admin All Akses*/
			} else {
				echo "Access Denied";
			}
			// return view('vHome', $data);
		}
	}

	public function worker()
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
			if ($session->get('role_id') == 2) {
				return view('vWorker', $data); /* Admin All Akses*/
			} else {
				echo "Access Denied";
			}
			// return view('vHome', $data);
		}
	}
}
