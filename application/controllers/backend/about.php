<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	protected $parser_data;
	protected $row_data;
	
	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$base = base_url();
		$this->parser_data['base'] = $base;

		$this->load->library('jquery_notification_library'); // jquery notification kütüphanesini çağırır
		$this->jquery_notification_library->setParserData($this->parser_data);
		
		$this->load->model('about_model');
		$this->row_data = $this->about_model->getAboutUsRowAsArray();
	}

	public function editAboutUs()
	{
		$this->parser_data['about_text_detail'] =  $this->row_data['about_text_detail'];

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/about_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
				
	}
	
	public function controlAboutUs()
	{	
		$about_text_detail	= $this->input->post('about_text_detail');
		
		if(($about_text_detail == ''))
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'editAboutUs';
			$this->jquery_notification_library->errorMessage($message, $return_path,2);

		}
		else
		{
			$update = $this->about_model->updateAboutUs($about_text_detail);
			
			if($update == TRUE)
			{
				$message = 'Hakkımızda Metni Başarıyla Güncellendi. Yönlendiriliyorsunuz...';
				$return_path = 'editAboutUs';
				$this->jquery_notification_library->successMessage($message, $return_path,2);
			}
			else
			{
				$message = 'Güncelleme İşlemi Başarısız Oldu';
				$return_path = 'editAboutUs';
				$this->jquery_notification_library->errorMessage($message, $return_path,2);	
			}
		}
					
	}

}