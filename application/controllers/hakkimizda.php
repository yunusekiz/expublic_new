<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hakkimizda extends CI_Controller {

	protected $parser_data;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('about_model');	
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Hakkımızda';
	}	
	
	public function index()
	{
		//$this->news();
		$this->tum_araclar();
		$this->parser_data['about_iteration'] = $this->about_model->getAboutUsRow();

		$this->parser->parse('frontend_views/hakkimizda_view',$this->parser_data);	
	}

	protected function tum_araclar()
	{
		$this->load->model('auto_cover_model');
		
		if ($this->auto_cover_model->readRow() == NULL)
		{
			$this->parser_data['brand_iteration'] = array();
			$this->parser_data['auto_iteration'] = array();
		}
		else
		{
			$this->parser_data['brand_iteration'] = $this->auto_cover_model->readRow(null,4);
			$this->parser_data['auto_iteration'] = $this->auto_cover_model->readRow(null,4);			
		}		
	}

	
}