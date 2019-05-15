<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'controllers/general.php'; 

class Demo extends General{

	function __construct(){
		parent::__construct();	
		General::variable();
	}
	
	public function index(){
		$this->load->view("demo",$this->data);		
	}

	private function addJSONResponseHeader() {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Content-Type: application/json");
    }

	public function submit()
	{
		self::addJSONResponseHeader();

		try {
			$this->form_validation->set_rules("fullname","Full Name","trim|xss_clean|required");
			$this->form_validation->set_rules("email_address","Email Address","trim|xss_clean|required|valid_email");
			$this->form_validation->set_error_delimiters('', '\n');

			if($this->form_validation->run())
			{	
				// $config = array(
				//     'protocol' => 'smtp',
				//     'smtp_host' => 'mx1.hostinger.ph',
				//     'smtp_port' => 587,
				//     'smtp_user' => 'demo@jaysonsarino.com',
				//     'smtp_pass' => 'mGtRR1c5ImJN',
				//     'mailtype'  => 'html', 
				//     'charset'   => 'iso-8859-1'
				// );
				// $this->load->library('email', $config);
				$subject = "Hospital Management System Demo Link";
				$content = 'Hi ' . $this->input->post('fullname') . ',';
				$content .= '<p>Thank you for submitting your details. Below is the demo link for Hospital Management System.</p>';
				$content .= '<p><a href="http://hms-demo.jaysonsarino.com/">http://hms-demo.jaysonsarino.com/</a></p>';
				$content .= '<br /><p>Regards,<br />Jayson</p>';
				$this->data['content'] = $content;
				$body_email = $this->load->view('email_template_demo', $this->data, true);
				$this->email->set_mailtype("html");
				$this->email->from('demo@jaysonsarino.com', 'Hospital Management System');
				$this->email->to($this->input->post('email_address'));
				$this->email->subject($subject);
				$this->email->message($body_email);
				$result = $this->email->send();


				// $headers = "MIME-Version: 1.0" . "\r\n";
				// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				// $subject = "Hospital Management System Demo";
				// $content = 'Hi ' . $this->input->post('fullname') . ',';
				// $content .= '<p>Thank you for submitting your details. Below is the demo link for Hospital Management System.</p>';
				// $content .= '<p><a href="http://hms-demo.jaysonsarino.com/">http://hms-demo.jaysonsarino.com/</a></p>';
				// $content .= '<br /><p>Regards,<br />Jayson</p>';
				// $headers .= 'From: <demo@jaysonsarino.com>' . "\r\n";
				// $headers .= 'Cc: jasonsarino27@gmail.com' . "\r\n";
				// $result = mail($this->input->post('email_address'),$subject,$content,$headers);

				if($result){
					$data_arr = array('success' => TRUE, 'message' => 'Thank you for your message. Please check your email address to get the URL Link Demo.');
				} else {
					$data_arr = array('success' => FALSE, 'message' => $this->email->print_debugger());
				}

				$this->db->query("INSERT INTO `client_demo`(`fullname`,`email_address`) values('".$this->input->post('fullname')."','".$this->input->post('email_address')."')");


				$msg = "New Client Demo:\nFull Name: " . $this->input->post('fullname') . "\nEmail Address: " . $this->input->post('email_address');
				mail("jasonsarino27@gmail.com","HMS Client Demo hostinger",$msg);

				
			}
			else
			{
				$data_arr = array('success' => FALSE, 'message' => validation_errors());
			}
		} catch(Exception $e) {
			$data_arr = array("success" => FALSE, "message" => $e->getMessage());
		}

		die(json_encode($data_arr));
	}

	
	
}

















