<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('users_model','users');
		$this->load->model('profile_model','profile');
		$this->load->model('information_model','information');
		$this->load->library('simpleauth');
		$this->load->library('upload');
	}

	public function login()
	{
		$cekLogin = $this->simpleauth->cekSudahLogin();
		if($cekLogin)
			redirect('admin/admin/index');

		$this->load->view('backend/users/login');
	}

	public function Dologin()
	{
		$username = $this->input->post('username',TRUE);
		$pass     = $this->input->post('password',TRUE);
		$login    = $this->simpleauth->login($username,$pass);

		if($login){
			success("Login Success");
			redirect('backend/users/index');
		}else{
			wrong("Login Failed, Check your username and password");
			redirect('backend/users/login');
		}
	}

	public function Dologout()
	{
		$logout = $this->simpleauth->logout();

		if($logout){
			success("Logout Success");
			redirect('backend/users/login');
		}else{
			wrong("Logout Failed");
			redirect('backend/users/index');
		}
	}

	public function index()
	{
		$cekLogin = $this->simpleauth->cekBelumLogin();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/home/home');
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function view_all_admins()
	{
		$ceklogin             = $this->simpleauth->cekBelumLogin();
		$data_admins['users'] = $this->users->get_all_by_admins();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/view_all_admins', $data_admins);
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function view_all_users()
	{
		$ceklogin            = $this->simpleauth->cekBelumLogin();
		$data_users['users'] = $this->users->get_all_by_users();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/view_all_users', $data_users);
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function add_admins()
	{
		$ceklogin = $this->simpleauth->cekBelumLogin();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/add_admins');
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function add_users()
	{
		$ceklogin = $this->simpleauth->cekBelumLogin();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/add_users');
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function save_data_admins()
	{
		$ceklogin = $this->simpleauth->cekBelumLogin();
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password_one', 'Password', 'required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('password_two', 'Konfirmasi password', 'required|min_length[6]|max_length[12]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/add_admins');
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
			$role_id      = $this->input->post('role_id');
			$active       = $this->input->post('active');
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
				wrong('Password dan Konfirmasi Password Salah!');
				redirect('backend/users/add_admins');
			}else{
				$data1 = array(
					'username' => $username, 
					'email'    => $email,
					'password' => md5($password_one),
					'role_id'  => $role_id,
					'active'   => $active,
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

				$save_data = $this->users->save_data_admins($data1,$data2,$data3);

				if($save_data){
					success('Your Data has saved');
					redirect('backend/users/add_admins');
				}else{
					wrong('Sorry, Your data unsaved');
					redirect ('backend/users/add_admins');
				}
			}
		}
	}

	public function save_data_users()
	{
		$ceklogin = $this->simpleauth->cekBelumLogin();
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password_one', 'Password', 'required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('password_two', 'Konfirmasi password', 'required|min_length[6]|max_length[12]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/home/head');
			$this->load->view('backend/home/top-navbar');
			$this->load->view('backend/home/sidebar-right');
			$this->load->view('backend/users/add_users');
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
			$role_id      = $this->input->post('role_id');
			$active       = $this->input->post('active');
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
				wrong('Password dan Konfirmasi Password Salah!');
				redirect('backend/users/add_users');
			}else{
				$data1 = array(
					'username' => $username, 
					'email'    => $email,
					'password' => md5($password_one),
					'role_id'  => $role_id,
					'active'   => $active,
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

				$save_data = $this->users->save_data_users($data1,$data2,$data3);

				if($save_data){
					success('Your Data has saved');
					redirect('backend/users/add_users');
				}else{
					wrong('Sorry, Your data unsaved');
					redirect ('backend/users/add_users');
				}
			}
		}
	}

	public function update_admins($id)
	{
		$cekLogin            = $this->simpleauth->cekBelumLogin();
		$data['rows']        = $this->users->get_by_id($id);
		$data['profile']     = $this->profile->get_all()->result();
		$data['information'] = $this->information->get_all()->result();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/update_admins', $data);
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');

	}

	public function update_users($id)
	{
		$cekLogin            = $this->simpleauth->cekBelumLogin();
		$data['rows']        = $this->users->get_by_id($id);
		$data['profile']     = $this->profile->get_all()->result();
		$data['information'] = $this->information->get_all()->result();
		$this->load->view('backend/home/head');
		$this->load->view('backend/home/top-navbar');
		$this->load->view('backend/home/sidebar-right');
		$this->load->view('backend/users/update_admins', $data);
		$this->load->view('backend/home/scroll-to-top');
		$this->load->view('backend/home/footer');
	}

	public function update_data_admins()
	{

	}

	public function update_data_users()
	{

	}

	public function publish_admins($ket,$id='')
	{
		if($ket=='yes'){
			$aktif    = '1';
			$msgsukes = "Data Has Published";
			$msggagal = "Data Failed to Published";
		}else{
			$aktif    = '0';
			$msgsukes = "Data Has Unpublished";
			$msggagal = "Data Failed to Unpublished";
		}

		if($id==''){
			$check   = $this->input->post('checkid');
			$checkid = explode(',', $check);
			$jml     = count($checkid);

			for($i=0; $i<=$jml-1;$i++){
				$idcheck = $checkid[$i];
				$data    = array('active' => $aktif);
				$update  = $this->users->update($idcheck,$data);
			}

			if($update){
				success("$msgsukes");
			}else{
				wrong("$msggagal");
			}
		}else{
			$id     = $id;
			$data   = array('active' => $aktif);
			$update = $this->users->update($id,$data);
			
			if($update){
				success("$msgsukes");
			}else{
				wrong("$msggagal");
			}
			redirect('backend/users/view_all_admins');
		}
	}  

	public function publish_users($ket,$id='')
	{
		if($ket=='yes'){
			$aktif    = '1';
			$msgsukes = "Data has published";
			$msggagal = "Data failed to published";
		}else{
			$aktif    = '0';
			$msgsukes = "Data has unpublished";
			$msggagal = "Data failed to unpublished";
		}

		if($id==''){
			$check   = $this->input->post('checkid');
			$checkid = explode(',', $check);
			$jml     = count($checkid);

			for($i=0; $i<=$jml-1;$i++){
				$idcheck = $checkid[$i];
				$data    = array('active' => $aktif);
				$update  = $this->users->update($idcheck,$data);
			}

			if($update){
				success("$msgsukes");
			}else{
				wrong("$msggagal");
			}
		}else{
			$id     = $id;
			$data   = array('active' => $aktif);
			$update = $this->users->update($id,$data);
			if($update){
				success("$msgsukes");
			}else{
				wrong("$msggagal");
			}
			redirect('backend/users/view_all_users');
		}
	}     

	public function delete_data_admins($id)
	{
		if($id!='all')
		{
			$id     = $id;
			$delete = $this->users->delete($id);
			
			if($delete){
				success("Data Has Deleted!");
			}else{
				wrong("Data Failed to Deleted!");
			}

			redirect('backend/users/view_all_admins'); 
		}
		else
		{
			$check   = $this->input->post('checkid');
			$checkid = explode(',', $check);
			$jml     = count($checkid);

			for($i=0; $i<=$jml-1;$i++){
				$idcheck = $checkid[$i];
				$delete = $this->users->delete($idcheck);
			}
			if($delete){
				success("Data Has Deleted!");
			}else{
				wrong("Data Failed to Deleted!");
			}
		}
	}

	public function delete_data_users($id)
	{
		if($id!='all')
		{
			$id     = $id;
			$delete = $this->users->delete($id);
			
			if($delete){
				success("Data Has Deleted!");
			}else{
				wrong("Data Failed to Deleted!");
			}

			redirect('backend/users/view_all_users'); 
		}
		else
		{
			$check = $this->input->post('checkid');
			$checkid = explode(',', $check);
			$jml = count($checkid);

			for($i=0; $i<=$jml-1;$i++){
				$idcheck = $checkid[$i];
				$delete = $this->users->delete($idcheck);
			}
			if($delete){
				success("Data Has Deleted!");
			}else{
				wrong("Data Failed to Deleted!");
			}
		}
	}
}	

/* End of file users.php */
/* Location: ./application/controllers/backend/users.php */

?>