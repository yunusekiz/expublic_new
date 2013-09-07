<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('contact');
        $this->model_killer_library->setNameOfIdColumn('contact_id');
    }

    public function insertRow($facebook, $twitter, $g_plus, $skype, $address, $phone, $email)
    {
		$insert_data = array(
								'facebook' 	=> $facebook,
								'twitter'	=> $twitter,
								'g_plus'	=> $g_plus,
								'skype'		=> $skype,
								'address'	=> $address,
								'phone'		=> $phone,
								'email'		=> $email
							);

		$this->model_killer_library->insertNewRow($insert_data);    	
    }	
	
	public function readRow($record_id = 1)
	{
		return $this->model_killer_library->readRow($record_id);
	}
	
	public function updateRow($facebook, $twitter, $g_plus, $skype, $address, $phone, $email)
	{
		$update_data = array(
								'facebook' 	=> $facebook,
								'twitter'	=> $twitter,
								'g_plus'	=> $g_plus,
								'skype'		=> $skype,
								'address'	=> $address,
								'phone'		=> $phone,
								'email'		=> $email
							);
		return $this->model_killer_library->updateRow(1,$update_data);
	}
}