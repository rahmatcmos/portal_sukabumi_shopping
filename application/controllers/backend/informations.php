<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Informations extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->library('simpleauth');
			$this->load->model('locations_model','locations');
		}
	
		public function index($offset=0)
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}

			// tentukan jumlah data per halaman
			$perpage = 3;
			
			// konfigurasi tampilan paging
			$config = array(
			'base_url'   => site_url('backend/informations'),
			'total_rows' => count($this->locations->GetAll()->result()),
			'per_page'   => $perpage,
			);

			// style pagination with twitter bootstrap
			$config['full_tag_open'] = '<ul class="pagination pagination-xs m-top-none pull-left">';
			$config['full_tag_close'] = '</ul>';            
			$config['prev_link'] = 'Previvous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			// inisialisasi pagination dan config
			$this->pagination->initialize($config);

			$limit['perpage'] = $perpage;
			$limit['offset']  = $offset;
			$data['locations_city']   = $this->locations->Get_search_city();
			$data['locations_agency'] = $this->locations->GetAll($limit);



			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/informations/add', $data);
			$this->load->view('backend/home/scroll-to-top');
			$this->load->view('backend/home/footer');
		}

		public function create()
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}
				
			$this->form_validation->set_rules('id_search_city', 'id_search_city', 'required');
			$this->form_validation->set_rules('agency_name', 'agency_name', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('backend/home/head');
				$this->load->view('backend/home/top-navbar');
				$this->load->view('backend/home/sidebar-right');
				$this->load->view('backend/informations/add');
				$this->load->view('backend/home/scroll-to-top');
				$this->load->view('backend/home/footer');
			}else{
				$id_search_city = $this->input->post('id_search_city');
				$agency_name    = $this->input->post('agency_name');
				
				$data = array('id_search_city' => $id_search_city, 'agency_name' => $agency_name,);

				$this->locations->create($data);
					redirect ('informations/');
			}
		}
	}