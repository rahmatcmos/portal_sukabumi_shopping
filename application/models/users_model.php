<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Users_model extends CI_Model 
	{	
		public function get_all(){
			$this->db->join('users','profile.id_users=users.id_users');
			$query = $this->db->get('profile');
			return $query;
		}

		public function save_data($data1,$data2,$data3) {
		    $this->db->trans_start();

		    $sql1 = "INSERT INTO users (username, email, password, role_id, active) VALUES (?, ?, ?, '1', '1')";
		    $this->db->query($sql1, $data1); 
		    
		    $id_users = $this->db->insert_id(); 
		    $sql2 = "INSERT INTO profile (id_users, fullname, birthday, gender, telephone, avatar) VALUES ($id_users, ?, ?, ?, ?, ?)";
		    $this->db->query($sql2, $data2);

		    $sql3 = "INSERT INTO information (id_users, city, zip_code, kelurahan, kecamatan, rt, rw) VALUES ($id_users, ?, ?, ?, ?, ?, ?)";
		    $this->db->query($sql3, $data3);

		    $this->db->trans_complete(); 
		    
		    if($save_data){
				return redirect ('backend/users/');
			}else{
				return redirect ('backend/users/add');
			}
		}
	}
	
	/* End of file users_model.php */
	/* Location: ./application/models/users_model.php */
?>