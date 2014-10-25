<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login_model extends CI_Model {
		
		public function check_user_account($username, $password)
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
				return $this->db->get();
		}

		public function get_user($id_users){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id_users', $id_users);
				return $this->db->get();
		}
	}
	
	/* End of file login_model.php */
	/* Location: ./application/models/login_model.php */
?>