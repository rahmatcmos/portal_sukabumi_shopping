<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Locations_model extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
		}

		public function GetAll($limit=array())
		{
			$this->db->select('*');
			$this->db->from('search_agency');
			$this->db->order_by('id_search_agency', 'desc');
			if ($limit != NULL)
				$this->db->limit($limit['perpage'], $limit['offset']);
			return $this->db->get();
		}

		public function Get_search_city()
		{
			return $this->db->get('search_city')->result();
		}	

		public function Get_id_search_city($key)
		{
			return $this->db->get_where('search_agency', array('id_search_city' => $key))->result_array();
		}

		public function create($data)
		{
			$create = $this->db->insert('search_agency', $data);
		
			if($create){
				return redirect ('backend/informations/');
			}else{
				return redirect ('backend/informations/');
			}
		}
	
	}
	
	/* End of file locations_model.php */
	/* Location: ./application/models/locations_model.php */
?>