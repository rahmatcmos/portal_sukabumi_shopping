<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('simpleauth');
	}

	public function index()
	{
		$ceklogin = $this->simpleauth->cekSudahLogin();
		if ($ceklogin) {
			redirect ('backend/home');
		}

		$this->load->view('backend/home/login');
	}

	public function DoLogin()
	{
		$ceklogin = $this->simpleauth->cekSudahLogin();
		if ($ceklogin) {
			redirect ('backend/home');
		}
		
		$username     = $this->input->post('username', 'true');
		$password     = $this->input->post('password', 'true');
		$temp_account = $this->login_model->check_user_account($username, $password)->row();
		
		$num_account = count($temp_account);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('backend/home/login');
		}else{
			if ($num_account > 0){

			$array_items = array(
				'id_users'  => $temp_account->id_users,
				'username'  => $temp_account->username,
				'logged_in' => true
				);
			$this->session->set_userdata($array_items);
				redirect(site_url('backend/home'));
			}else{
				$this->session->set_flashdata("notification", "<div class=\"wrong\">Username dan Password Salah!</div>");
				redirect(site_url('backend/login'));
			}
		}
	}

	public function DoLogout()
	{
		$this->session->sess_destroy();
		redirect(site_url('backend/login'));
	}
}

/* End of file login.php */
/* Location: ./application/controllers/backend/login.php */

?>