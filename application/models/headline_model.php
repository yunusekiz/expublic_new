<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class headline_model extends CI_Model{

	public function read()
	{
		$query = $this->db->select('*')->from('headline')->where('id',1)->get();
		return $query->result_array();
	}

	public function updateItem($title)
	{
		$update_data = array(
								'title' => $title
							);		
		$query = $this->db->where('id',1)->update('headline',$update_data);

		$affected_rows = $this->db->affected_rows();
		if ($affected_rows > 0)
			return TRUE;
		else
			return FALSE;
	}
}
