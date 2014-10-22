<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/login');
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