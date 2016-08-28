<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuser extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('america/caracas');
		$this->load->database('default');
	}	

	public function index() {
		$data = $this->session->flashdata('data');
		$entrada = $data;
		$mensaje = $data['mensaje'];
		$validadot = '';
		$entrada['datos'] = array();
		$entrada['datos'] = array('mensaje'   => $mensaje);
		$entrada['main_content'] = 'vregister';
		$this->load->view('includes/template',$entrada);
	}
	
	public function validar_register_user() {
		$this->load->model('Muser');
		$this->load->model('Mmensaje');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('rif','Rif','required');
		$this->form_validation->set_rules('business_name','Business Name','required');
				
		if ($this->form_validation->run() == FALSE) {
			$mensaje = $this->Mmensaje->mensaje('Existen datos sin completar','Error !');
		}
		else {
			$this->Muser->insert_new_user();
			$mensaje = $this->Mmensaje->mensaje('Datos registrado con éxito !');
			redirect('cprincipal');
		}

		//echo "mensaje ".$mensaje."<br>";
		//exit;
		$data['mensaje'] = $mensaje;
		$data['name'] = $this->input->post('name');
		$data['last_name'] = $this->input->post('last_name');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['rif'] = $this->input->post('rif');
		$data['business_name'] = $this->input->post('business_name');
		$this->session->set_flashdata('data',$data);
		redirect('cuser');

	}
	
  	
}

?>
