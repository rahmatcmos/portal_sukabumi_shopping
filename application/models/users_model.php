<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Users_model extends CI_Model 
	{	
		public function get_all(){
			$this->db->join('users','profile.users_id=users.id_users');
			$query = $this->db->get('profile');
			return $query;
		}

		public function get_all_by_admins()
		{
			$this->db->where('role_id','1');
			$query = $this->db->get('users');
				return $query;
		}

		public function get_all_by_users()
		{
			$this->db->where('role_id','2');
			$query = $this->db->get('users');
				return $query;
		}

		public function get_by_id($id,$view=NULL)
		{
			if ($view != NULL)
			$this->db->join('profile','users.id_users=profile.users_id');
			$this->db->join('information','users.id_users=information.users_id');
			$this->db->where('id_users',$id);
	        $query = $this->db->get('users');
	        	return $query;
		}

		public function save_data_admins($data1,$data2,$data3) {
		    $this->db->trans_start();

		    $sql1 = "INSERT INTO users (username, email, password, role_id, active) VALUES (?, ?, ?, '1', '1')";
		    $this->db->query($sql1, $data1); 
		    
		    $users_id = $this->db->insert_id(); 
		    $sql2 = "INSERT INTO profile (users_id, fullname, birthday, gender, telephone, avatar) VALUES ($users_id, ?, ?, ?, ?, ?)";
		    $this->db->query($sql2, $data2);

		    $sql3 = "INSERT INTO information (users_id, city, zip_code, kelurahan, kecamatan, rt, rw) VALUES ($users_id, ?, ?, ?, ?, ?, ?)";
		    $this->db->query($sql3, $data3);

		    $save_data = $this->db->trans_complete(); 
		    	return $save_data;
		}

		public function save_data_users($data1,$data2,$data3) {
		    $this->db->trans_start();

		    $sql1 = "INSERT INTO users (username, email, password, role_id, active) VALUES (?, ?, ?, '2', '1')";
		    $this->db->query($sql1, $data1); 
		    
		    $users_id = $this->db->insert_id(); 
		    $sql2 = "INSERT INTO profile (users_id, fullname, birthday, gender, telephone, avatar) VALUES ($users_id, ?, ?, ?, ?, ?)";
		    $this->db->query($sql2, $data2);

		    $sql3 = "INSERT INTO information (users_id, city, zip_code, kelurahan, kecamatan, rt, rw) VALUES ($users_id, ?, ?, ?, ?, ?, ?)";
		    $this->db->query($sql3, $data3);

		    $save_data = $this->db->trans_complete(); 
		    	return $save_data;
		}

		public function update($id,$data)
	    {
	        $this->db->where('id_users',$id);
	        $update = $this->db->update('users', $data);
	        	return $update;
	    }

	    public function delete($id)
	    {
	    	$delete = $this->db->delete('users',array('id_users'=>$id));
	    	$delete = $this->db->delete('profile',array('users_id'=>$id));
	    	$delete = $this->db->delete('information',array('users_id'=>$id));
	    		return $delete;
	    }
	}
	
	/* End of file users_model.php */
	/* Location: ./application/models/users_model.php */
?>