<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->load->view('shareds/head');
			$this->load->view('shareds/nav_bar');
			$this->load->view('shareds/mini_property');
			$this->load->view('login');
			$this->load->view('shareds/footer');
			$this->load->view('shareds/javascript');
		}
	
	}
	
	/* End of file login.php */
	/* Location: ./application/controllers/login.php */
?>