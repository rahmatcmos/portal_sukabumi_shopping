<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/theme-setting');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/product/view_all');
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function add()
	{

	}

	public function update()
	{

	}

	public function delete()
	{

	}
}

/* End of file login.php */
/* Location: ./application/controllers/backend/login.php */

?>