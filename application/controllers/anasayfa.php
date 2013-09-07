<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class anasayfa extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
	}	

	public function index()
	{
		$this->social_icons();
		$this->service();
		$this->team();
		$this->headline();
		
		$this->parser->parse('frontend_views/anasayfa_view',$this->parser_data);
	}

	protected function social_icons()
	{	
		$this->load->model('contact_model');
		
		if ($this->contact_model->readRow() == NULL)
			return $this->parser_data['social_iteration'] = array();
		else
			return $this->parser_data['social_iteration'] = $this->contact_model->readRow();
	}


	protected function service() /* bu metod protected çünkü url den direk çağrılması sakıncalı olabilir. */
	{
		$this->load->model('service_model');
		
		if ($this->service_model->readRow() == NULL)
		{
			$this->parser_data['service_iteration'] = array();
		}
		else
		{
			$this->parser_data['service_iteration'] = $this->service_model->readRow(null,8);			
		}		
	}

	protected function team() /* bu metod protected çünkü url den direk çağrılması sakıncalı olabilir. */
	{
		$this->load->model('team_model');
		
		if ($this->team_model->readRow() == NULL)
		{
			$this->parser_data['team_iteration'] = array();
		}
		else
		{
			$this->parser_data['team_iteration'] = $this->team_model->readRow(null,8);			
		}		
	}

	protected function headline() /* bu metod protected çünkü url den direk çağrılması sakıncalı olabilir. */
	{
		$this->load->model('headline_model');
		
		if ($this->headline_model->read() == NULL)
		{
			$this->parser_data['headline_iteration'] = array();
		}
		else
		{
			$this->parser_data['headline_iteration'] = $this->headline_model->read();			
		}		
	}		
}