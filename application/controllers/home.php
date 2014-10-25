<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('locations_model','locations');

	}

	public function index()
	{
		// GET CITY FROM TABLE SEARCH CITY
		$data['city']  = $this->locations->Get_search_city();

		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/carousel', $data);
		$this->load->view('shareds/top_search');
		$this->load->view('home');
		$this->load->view('shareds/foo');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}

	public function Get_Agency()
	{
		$key    = $this->input->post('key');
		$agency = $this->locations->Get_id_search_city($key);

		foreach ($agency as $row){
			echo '<option value="'.$row['id_search_agency'].'" class="form-control">Kec. '.$row['agency_name'].'</option>';
		}
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

?>