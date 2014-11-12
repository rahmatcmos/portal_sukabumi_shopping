<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Location_model extends CI_Model {
	
		public function get_all()
		{
			$query = $this->db->get('location');
				return $query;
		}	

		public function get_by_id($id)
		{
			$this->db->where('id_location', $id);
			$query = $this->db->get('location');
				return $query;
		}
	
	}
	
	/* End of file location_model.php */
	/* Location: ./application/models/location_model.php */
?>