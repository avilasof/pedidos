<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model {

	public function __construct () {
		parent::__construct ();
		$this->load->database();
	}

	function insert_new_user() {
		$arreglo_datos = array(  'nombres'        	=> $this->input->post('nombres'),
								 'apellidos' 		=> $this->input->post('apellidos'),
								 'ced_pas'       	=> $this->input->post('ced_pas'),
								 'fecha_nac' 		=> $this->input->post('fecha_nac'),
								 'genero'       	=> $this->input->post('genero'),
								 'direccion'       	=> NULL,
								 'telefono'      	=> $this->input->post('telefono'),
								 'nro_cel'      	=> $this->input->post('nro_cel'),
								 'email'        	=> $this->input->post('email'),
								 'nacionalidad' 	=> $this->input->post('nacionalidad'),
								 'username'       	=> $this->input->post('username'),
								 'password'       	=> $this->input->post('password'),
								 'block'       		=> NULL,
								 'sendemail'       	=> NULL,
								 'registerdate'  	=> NULL,
								 'lastvisitdate' 	=> NULL,
								 'activation'       => NULL,
								 'lastresettime'  	=> NULL,
								 'resetcount'       => NULL,
								 'otpkey'       	=> NULL,
								 'otep'       		=> NULL,
								 'requirereset'  	=> NULL);
		//$this->db->insert(PUBLIC_PERSONA, $arreglo_datos);
   }

}


?>
