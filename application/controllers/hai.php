<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Hai extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->model('users_model','users');
			$this->load->library('simpleauth');
			$this->load->library('upload');
			$this->output->enable_profiler(TRUE);
		}
		
		public function index($offset=0)
		{

			// tentukan jumlah data per halaman
			$perpage = 3;
			
			// konfigurasi tampilan paging
			$config = array(
			'base_url'   => site_url('hai/index/'),
			'total_rows' => count($this->users->get_all()->result()),
			'per_page'   => $perpage,
			);

			// style pagination with twitter bootstrap
			$config['full_tag_open']  = '<ul class="pagination pagination-xs m-top-none pull-right">';
			$config['full_tag_close'] = '</ul>';            
			$config['prev_link']      = 'Previvous';
			$config['prev_tag_open']  = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link']      = 'Next';
			$config['next_tag_open']  = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open']   = '<li class="active"><a href="#">';
			$config['cur_tag_close']  = '</a></li>';
			$config['num_tag_open']   = '<li>';
			$config['num_tag_close']  = '</li>';
			
			// inisialisasi pagination dan config
			$this->pagination->initialize($config);

			$limit['perpage'] = $perpage;
			$limit['offset']  = $offset;
			$data['users']    = $this->users->get_all($limit)->result();

			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/view_all', $data);
			$this->load->view('backend/home/scroll-to-top');
			$this->load->view('backend/home/footer');
		}
	
		public function add()
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}

			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/add');
			$this->load->view('backend/home/scroll-to-top');
			$this->load->view('backend/home/footer');
		}

		public function save_data()
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password_one', 'Password', 'required|min_length[6]|max_length[12]');
			$this->form_validation->set_rules('password_two', 'Konfirmasi password', 'required|min_length[6]|max_length[12]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('backend/home/head');
				$this->load->view('backend/home/top-navbar');
				$this->load->view('backend/home/sidebar-right');
				$this->load->view('backend/users/add');
				$this->load->view('backend/home/scroll-to-top');
				$this->load->view('backend/home/footer');
			}else{
				$config['upload_path']   = "./users/";
				$config['allowed_types'] = 'gif|jpg|png|JPEG';
				$config['file_name']     = url_title($this->input->post('avatar'));
				$config['encrypt_name']  = TRUE;

				$this->upload->initialize($config);

				$username     = $this->input->post('username');
				$email        = $this->input->post('email');
				$password_one = $this->input->post('password_one');
				$password_two = $this->input->post('password_two');
				$fullname     = $this->input->post('fullname');
				$birthday     = $this->input->post('birthday');
				$gender       = $this->input->post('gender');
				$telephone    = $this->input->post('telephone');
				$avatar       = $this->upload->file_name;
				$city         = $this->input->post('city');
				$zip_code     = $this->input->post('zip_code');
				$kecamatan    = $this->input->post('kecamatan');
				$kelurahan    = $this->input->post('kelurahan');
				$rt           = $this->input->post('rt');
				$rw           = $this->input->post('rw');

				if ($password_one != $password_two) {
					$this->session->set_flashdata("notification", "<div class=\"wrong\">Password dan Password konfirmasi tidak sama!</div>");
					redirect(site_url('backend/users/add'));
				}else{
					$data1 = array(
						'username' => $username, 
						'email'    => $email,
						'password' => $password_one,
					);

					$data2 = array(
						'fullname'     => $fullname,
						'birthday'     => $birthday,
						'gender'       => $gender,
						'telephone'    => $telephone,
						'avatar'       => $avatar,
						);

					$data3 = array(
						'city'         => $city,
						'zip_code'     => $zip_code,
						'kecamatan'    => $kecamatan,
						'kelurahan'    => $kelurahan,
						'rt'           => $rt,
						'rw'           => $rw,
						);

					$input = $this->users->save_data($data1,$data2,$data3);

					if($input){
						echo "<script>alert('Data saved!');</script>";
							redirect('backend/users/add');
					}else{
						echo "<script>alert('Data not saved!');</script>";
							redirect ('backend/users/add');
					}
				}
			}
		}

		
	
		public function edit()
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}

			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/update');
			$this->load->view('backend/home/scroll-to-top');
			$this->load->view('backend/home/footer');
		}

		public function update()
		{
	
		}

		public function destroy()
		{
	
		}

		public function publish()
		{
	
		}

		public function user_pending()
		{
	
		}
	}
	
	/* End of file users.php */
	/* Location: ./application/controllers/backend/users.php */
	
?>