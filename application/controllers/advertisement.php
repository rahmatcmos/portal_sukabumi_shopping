<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Advertisement extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		// List all your items
		public function index()
		{
			$this->load->view('shareds/head');
			$this->load->view('shareds/nav_bar');
			$this->load->view('shareds/mini_property');
			$this->load->view('advertisement');
			$this->load->view('shareds/footer');
			$this->load->view('shareds/javascript');
		}
	}
	
	/* End of file signup_ads.php */
	/* Location: ./application/controllers/backend/signup_ads.php */
	
?>