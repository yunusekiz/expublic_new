<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kariyer extends CI_Controller {

	protected $parser_data;

	public function __construct()
	{
		parent::__construct();

/*		$this->load->model('career_model');	
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Kariyer - İnsan Kaynakları';

		$this->load->helper('filter_killer');
		$this->load->helper('delete_file_killer');
*/
	}	
	
	public function index()
	{
/*		$this->iletisim();
		
		$this->parser->parse('frontend_views/header_view',$this->parser_data);
		$this->parser->parse('frontend_views/kariyer_view',$this->parser_data);
		$this->parser->parse('frontend_views/footer_view',$this->parser_data);	*/	
	}

	protected function iletisim()
	{
		$this->load->model('contact_model');
		$this->parser_data['contact_iteration'] = $this->contact_model->readRow();
	}

	public function basvuru()
	{
/*		$name_surname 	=	$this->input->post('contactname');
		$email 			=	$this->input->post('email');
		$phone 			=	$this->input->post('phone');
		$position 		=	$this->input->post('position');
		$message 		=	$this->input->post('message');

			$file_name = 'basvuru_formu'.'____'.date("d-m-Y").'____';

			$array = array(
							'image_form_field'	=>	'cv_file_name',
							'upload_path'		=>	'assets/images/career',
							'image_name'		=>	$file_name
					 	 );

			$this->load->library('image_upload_resize_library');
				
			$this->image_upload_resize_library->setBootstrapData($array);
		
			$this->image_upload_resize_library->display_errors = FALSE;

			$file_upload = $this->image_upload_resize_library->imageUpload();

			if ($file_upload == TRUE) 
			{
				$file_path_after_upload = $this->image_upload_resize_library->getUploadedFileFullPath();
				$f_path = strstr($file_path_after_upload, 'assets');

				$insert_item_detail_to_db = $this->career_model->insertNewCareerRecord($name_surname, $email,
																					   $phone, $position,
																					   $message, $f_path);
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{
						$msg = 'Basvurunuz elimize ulasti, en kisa surede sizinle iletisime gececegiz.';
						echo "<script type='text/javascript'>
								alert('$msg');
							  </script>";
					echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."kariyer\">";
				}
				else
				{
					$msg = 'HATA..!';
					echo "<script type='text/javascript'>
							alert('$msg');
						  </script>";
					echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."kariyer\">";	  				
				}

			}
			else
			{
				$msg = "Dosya yuklenemedi";
				echo "<script type='text/javascript'>
							alert('$msg');
					  </script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."kariyer\">";	  
			}*/

	}
	
}