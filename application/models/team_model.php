<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class team_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('team_detail');
        $this->model_killer_library->setNameOfIdColumn('team_id');
        $this->model_killer_library->setViewTableName('team_view');
    }

	public function insertNewItemDetail($team_title, $team_detail)
	{
		$insert_data = array(
								'team_title'	=> $team_title,
								'team_detail' 	=> $team_detail
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($team_big_photo, $team_thumb_photo, $team_id=NULL)
	{
		if ($team_id == NULL)
			$team_id = $this->last_record_id;

		$insert_data = array(
								'team_id'			=> $team_id,
								'team_big_photo'	=> $team_big_photo,
								'team_thumb_photo'	=> $team_thumb_photo
							);

		$this->model_killer_library->setTableName('team_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($team_id, $team_title, $team_detail)
	{
		$update_data = array(
								'team_id'		=> $team_id,
								'team_title'	=> $team_title,
								'team_detail' 	=> $team_detail
							);
		return $this->model_killer_library->updateRow($team_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'team_photo_id';
		$table_name = 'team_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}