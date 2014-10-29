<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Information_model extends CI_Model {
	
		public function get_all()
		{
			$query = $this->db->get('information');
				return $query;
		}
	
	}
	
	/* End of file profile_model.php */
	/* Location: ./application/models/information_model.php */
?>