<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('service');
        $this->model_killer_library->setNameOfIdColumn('service_id');
    }

	public function insertNewItemDetail($service_icon, $service_title, $service_detail, $service_css)
	{
		$insert_data = array(
								'service_icon'   => $service_icon,
								'service_title'  => $service_title,
								'service_detail' => $service_detail,
								'service_css'    => $service_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}


	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function read($record_id = NULL)
	{
		if ($record_id == NULL) 
		{
			$query = $this->db->select('*')->from('service')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('service')->where('service_id',$record_id)->get();
			return $query->result_array();
		}
	}

	public function updateServiceDetail($service_id, $service_icon,$service_title, $service_detail, $service_css)
	{
		$update_data = array(
								'service_icon'		=> $service_icon,
								'service_title' 	=> $service_title,
								'service_detail' 	=> $service_detail,
								'service_css'		=> $service_css
							);

		return $this->model_killer_library->updateRow($service_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}
