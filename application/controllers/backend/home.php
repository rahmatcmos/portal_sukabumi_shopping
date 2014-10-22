<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->view('backend/home/head');
			$this->load->view('backend/home/theme-setting');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/home/home');
			$this->load->view('backend/home/scroll-to-top');
			$this->load->view('backend/home/footer');
		}
	
	}
	
	/* End of file home.php */
	/* Location: ./application/controllers/backend/home.php */
?>