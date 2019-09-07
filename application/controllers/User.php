<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('users/index');
		$this->load->view('template/footer');
	}

	public function showAll()
	{
		$user = $this->user_m;
		$query = $user->showAll();
		if ($query) {
			$result['users'] = $user->showAll();
		}
		echo json_encode($result);
	}
}
