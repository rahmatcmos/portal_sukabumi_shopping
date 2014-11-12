<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Sub_district_model extends CI_Model {
	
		public function get_all()
		{
			$query = $this->db->get('sub_district');
				return $query;
		}

		public function get_by_id($id)
		{
			$this->db->where('location_id', $id);
			$query = $this->db->get('sub_district')->result_array();
				return $query;
		}
	}
	
	/* End of file locations_model.php */
	/* Location: ./application/models/locations_model.php */
?>