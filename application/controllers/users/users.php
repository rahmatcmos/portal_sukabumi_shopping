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
		$cekLogin = $this->simpleauth->cekBelumLogin();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/home/home');
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}