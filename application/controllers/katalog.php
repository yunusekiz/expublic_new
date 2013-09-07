<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class katalog extends CI_Controller {

	protected $parser_data;

	public function __construct()
	{
/*		parent::__construct();

		$this->load->model('catalog_model');	
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Kataloglar';*/
	}	
	
	public function index()
	{
/*		$this->load->model('catalog_model');

		if ($this->catalog_model->readRow() == NULL)
			$this->parser_data['catalog_iteration'] = array();
		else
			$this->parser_data['catalog_iteration'] = $this->catalog_model->readRow();

		$this->parser->parse('frontend_views/header_view',$this->parser_data);
		$this->parser->parse('frontend_views/catalog_view',$this->parser_data);
		$this->parser->parse('frontend_views/footer_view',$this->parser_data);	*/
	}

	
}