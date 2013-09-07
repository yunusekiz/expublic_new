<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class catalog_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('catalog');
        $this->model_killer_library->setNameOfIdColumn('catalog_id');
    }

	public function insertNewCatalog($catalog_title, $catalog_date, $catalog_file_path)
	{
		$insert_data = array(
								'catalog_title' 	=> $catalog_title,
								'catalog_date' 		=> $catalog_date,
								'catalog_file_path' => $catalog_file_path
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
			$query = $this->db->select('*')->from('catalog')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('catalog')->where('catalog_id',$record_id)->get();
			return $query->result_array();
		}
	}	

	public function updateCatalog($catalog_id ,$catalog_title, $catalog_date)
	{
		$update_data = array(
								'catalog_title' 	=> $catalog_title,
								'catalog_date' 		=> $catalog_date
							);

		return $this->model_killer_library->updateRow($catalog_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

}
