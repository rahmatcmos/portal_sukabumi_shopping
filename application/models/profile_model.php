<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Profile_model extends CI_Model {
	
		public function get_all()
		{
			$query = $this->db->get('profile');
				return $query;
		}
	
	}
	
	/* End of file profile_model.php */
	/* Location: ./application/models/profile_model.php */
?>