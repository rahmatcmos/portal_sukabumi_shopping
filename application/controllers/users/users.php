<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('users_model','users');
		$this->load->model('profile_model','profile');
		$this->load->model('information_model','information');
		$this->load->library('simpleauth');
		$this->load->library('upload');
	}

	public function login()
	{
		$cekLogin = $this->simpleauth->cekSudahLogin();
		if($cekLogin)
			redirect('users/users/index');

		$this->load->view('users/users/login');
	}

	public function Dologin()
	{
		$username = $this->input->post('username',TRUE);
		$pass     = $this->input->post('password',TRUE);
		$login    = $this->simpleauth->login($username,$pass);

		if($login){
			success("Login Success");
			redirect('users/users/index');
		}else{
			wrong("Login Failed, Check your username and password");
			redirect('users/users/login');
		}
	}

	public function Dologout()
	{
		$logout = $this->simpleauth->logout();

		if($logout){
			success("Logout Success");
			redirect('users/users/login');
		}else{
			wrong("Logout Failed");
			redirect('users/users/index');
		}
	}

	public function index()
	{
		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/mini_property');
		$this->load->view('users/home');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}
}