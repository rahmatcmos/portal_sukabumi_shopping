<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/carousel');
		$this->load->view('shareds/top_search');
		$this->load->view('home');
		$this->load->view('shareds/foo');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}

	public function list_barang()
	{
		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/mini_property');
		$this->load->view('list_barang');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}

	public function single_barang()
	{
		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/mini_property');
		$this->load->view('single_barang');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

?>