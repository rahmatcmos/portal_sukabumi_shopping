<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('location_model','location');
		$this->load->model('sub_district_model','sub_district');
	}

	public function index()
	{
		// $this->output->enable_profiler(TRUE);
		$data['location']     = $this->location->get_all();
		$data['sub_district'] = $this->sub_district->get_all();

		$this->load->view('shareds/head');
		$this->load->view('shareds/nav_bar');
		$this->load->view('shareds/carousel', $data);
		$this->load->view('shareds/top_search');
		$this->load->view('home');
		$this->load->view('shareds/foo');
		$this->load->view('shareds/footer');
		$this->load->view('shareds/javascript');
	}

	public function get_sub_district()
	{
		$id           = $this->input->post('id');
		$sub_district = $this->sub_district->get_by_id($id);

		foreach ($sub_district as $row){
			echo '<option value="'.$row['id_sub_district'].'" class="form-control">'.$row['name'].'</option>';
		}
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>