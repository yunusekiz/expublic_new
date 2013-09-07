<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class iletisim extends CI_Controller {

	protected $parser_data;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('contact_model');	
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'İletişim';
	}	
	
	public function index()
	{
		$this->parser_data['contact_iteration'] = $this->contact_model->readRow();

		$this->parser->parse('frontend_views/iletisim_view',$this->parser_data);	
	}

	public function mail()
	{
		$contactname = $this->input->post('contactname');
		$email 	 	 = $this->input->post('email');
		$subject 	 = $this->input->post('subject');
		$message 	 = $this->input->post('message');

		if (($contactname !="")&&($email!="")&&($subject!="")&&($message!="")) 
		{

			$message_total = "Mail gönderen kişinin : "."\n";
			$message_total .= "Adı soyadı : ".$contactname."\n";
			$message_total .= "Mail adresi : ".$email."\n";
			$message_total .= "Mail içeriği : ".$message;

			$email_data = array(
							 	 'to'		=> 'info@atselektrik.com',
							 	 'subject' 	=> filterForeignChars($subject),
							 	 'message'	=> $message_total
								);

			$this->email_killer_library->setEmailData($email_data);

			$send_email = $this->email_killer_library->sendEmail($email_data);

			if ($send_email == true)
			{
				$msg = 'Basvurunuz elimize ulasti, en kisa surede sizinle iletisime gececegiz.';
				echo "<script type='text/javascript'>
						alert('$msg');
					  </script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."iletisim\">";	
			}
			else
			{
				$msg = 'Bir hata olustu. Lutfen daha sonra tekrar deneyin';
				echo "<script type='text/javascript'>
						alert('$msg');
					  </script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."iletisim\">";					
			}   
		}
		else
		{
			$msg = 'Lutfen bos alan birakmayin.';
			echo "<script type='text/javascript'>
					 alert('$msg');
				  </script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=".base_url()."iletisim\">";			
		}

	}


	public function eposta()
	{


		if ($this->input->is_ajax_request()) 
		{	
			$contactname = $this->input->post('postName');
			$email 	 	 = $this->input->post('postEmail');
			$message 	 = $this->input->post('postMessage');
			
			if (($contactname !="")&&($email!="")&&($message!="")) 
			{

				$message_total = "Mail gönderen kişinin : "."\n";
				$message_total .= "Adı soyadı : ".$contactname."\n";
				$message_total .= "Mail adresi : ".$email."\n";
				$message_total .= "Mail içeriği : ".$message;

				$email_data = array(
								 	 'to'		=> 'cagri.yeni@gmail.com',
								 	 'subject' 	=> 'Yeni e-posta',
								 	 'message'	=> $message_total
									);

				$this->email_killer_library->setEmailData($email_data);

				$send_email = $this->email_killer_library->sendEmail($email_data);

				if ($send_email == true)
				{
					echo "Mesajınız bize ulaştı. En kısa sürede sizinle iletişime geçeceğiz.";

				}
				else
					echo "Bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
			}
			else
				echo "Lütfen boş alan bırakmayın.";
		}
		else
			echo "Bir hata oluştu. Lütfen daha sonra tekrar deneyin (ajax request olmadığı için reddedildi)";
	}	


}