<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class headline extends CI_Controller {

	private $pass_column_data;
	protected $base_data;
	protected $parser_data;

	protected $error_data;

	public function index()
	{
		return null;
	}

	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');		

		$this->load->model('headline_model');

		$this->base_data = base_url();
	}

	public function editItemForm()
	{
		$this->parser_data = array(
									'base' => $this->base_data,
									'item_detail' => $this->headline_model->read()
								  );

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/edit_headline_form_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);


	}

	public function updateItem()
	{
		$title 	= $this->input->post('title');

		if(($title != ''))
		{
					$update_item = $this->headline_model->updateItem($title);
					if ($update_item == TRUE)
					{
						$message = 'Kayıt güncelleme başarılı';
						$this->successPass($message);
					}
					else
					{
						$message = 'HATA:: Kayıt güncellenemedi!';
						$this->errorPass($message);
					}

		}
		else
		{
			$message ='HATA:: Lütfen Boş Alan Bırakmayın..!';
			$this->errorPass($message);
		}

	}

	public function errorPass($message)
	{
		$this->parser_data = array(
									'base' 				=> $this->base_data,
									'error_message'		=> $message
								  );

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/error_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
		echo "<meta http-equiv=\"refresh\" content=\"1; url=editItemForm\">";	

	}

	public function successPass($message)
	{
		$this->parser_data = array(
									'base' 				=> $this->base_data,
									'success_message'	=> $message
								  );

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/success_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
		echo "<meta http-equiv=\"refresh\" content=\"1; url=editItemForm\">";	

	}

}
	