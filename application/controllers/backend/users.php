<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Users extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->library('simpleauth');
			$this->load->library('upload','upload');
			$this->load->model('users_model','users');
			$this->output->enable_profiler(TRUE);
		}
		
		public function index()
		{
			$ceklogin = $this->simpleauth->cekBelumLogin();
			if ($ceklogin) {
				redirect ('backend/login');
			}

			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/view_all');
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

		public function create()
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
				$config['upload_path'] = "./users/";
				$config['allowed_types'] = 'gif|jpg|png|JPEG';
				$config['file_name'] = url_title($this->input->post('avatar'));
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

				if ($password_one != $password_tw){
					echo "password tidak sama!";
					redirect ('backend/users/add');
				}

				if( !$this->upload->create('avatar')){
					echo $this->upload->display_errors();
				}else{
					$data1 = array(
						'username'     => $username, 
						'email'        => $email,
						'password_one' => $password_one,
						'password_two' => $password_two,
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
					
					$dbgetmodel = array('users','profile','information');

					$this->users->create($data1, $data2, $data3, $dbgetmodel);
						redirect('users/');
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