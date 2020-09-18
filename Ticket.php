<?php 
class Ticket extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('TicketModel');
		$this->load->library(array('form_validation', 'session'));

	}

	public function index()
	{


	}

	public function login()
	{

		$this->load->view('login');
	}

	public function allTickets($contactId)
	{
		$url = 'https://desk.zoho.in/api/v1/contacts/'.$contactId.'/tickets';
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'orgId:60001280952',
			'Authorization: 9446933330c7f886fbdf16782906a9e0'

		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);

		$data['tickets'] = json_decode($result,true);
		$this->load->view('tickets',$data);
	}

	public function postLogin()
	{

		$data = array(
			'email' => $this->input->post('email'),
		   'password' => $this->input->post('password')
		);

        $check = $this->TicketModel->auth_check($data);

		if ($check != false) {
			$user = array(
				'id' => $check->id,
				'name' => $check->name,
				'email' => $check->email,
				'phone' => $check->phone

			);
			$this->session->set_userdata('logged_in',$user);

			$url = 'https://desk.zoho.in/api/v1/departments';
			$ch = curl_init($url);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type:application/json',
				'orgId:60001280952',
				'Authorization: 9446933330c7f886fbdf16782906a9e0'

			));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);

			$data['department'] = json_decode($result,true);
			$this->load->view('newticket',$data);
		}else{
			$this->session->set_flashdata('message','User does not exists');
			redirect('ticket/login');

		}


	}

	public function postTicket(){

		$data = array(

		"departmentId" => $this->input->post('departmentId'),
		"contact"=>array(
			"firstName" => $this->input->post('name'),
			"email" => $this->input->post('email'),
			"phone" => $this->input->post('phone'),
		),
		"category" => $this->input->post('category'),
		"priority" => $this->input->post('priority'),
		"subject" => $this->input->post('subject'),
		"description" => $this->input->post('description')
		);

       $formData = json_encode($data);


		$url = 'https://desk.zoho.in/api/v1/tickets';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'orgId:60001280952',
			'Authorization: 9446933330c7f886fbdf16782906a9e0'

		));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);

		$res = json_decode($result,true);
//		print_r($res['']);exit;
		$contactId = $res['contactId'];

		if($res){
			$this->session->set_flashdata('message','Ticket Created Successfully !');
			$url = 'https://desk.zoho.in/api/v1/contacts/'.$contactId.'/tickets';
			$ch = curl_init($url);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type:application/json',
				'orgId:60001280952',
				'Authorization: 9446933330c7f886fbdf16782906a9e0'

			));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);

			$data['tickets'] = json_decode($result,true);
			$this->load->view('tickets',$data);
		}

	}
		public function getTicket($ticketId){


			$url = 'https://desk.zoho.in/api/v1/tickets/'.$ticketId;
			$ch = curl_init($url);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type:application/json',
				'orgId:60001280952',
				'Authorization: 9446933330c7f886fbdf16782906a9e0'

			));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);


			$data['ticketDetails'] = json_decode($result,true);
			$this->load->view('ticketDetails',$data);
		}

}
?>
