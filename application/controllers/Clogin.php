<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	/**
	 * Comtrolador para el Login
	 */
	 
	public function __construct() 
	{
		parent::__construct();
		date_default_timezone_set('america/caracas');
		$this->load->database('default');
	}	
	
	public function index()
	{	
		$entrada['main_content'] = 'vlogin';
		$this->load->view('includes/template',$entrada);
	}
	
	public function validar() 
	{
		if ($this->input->post('email')) {
			$email = strtolower($this->input->post('email'));
			$pass = $this->input->post('password');
			$this->load->model('mlogin');
			$this->load->model('mmensaje');
			$validado=$this->mlogin->valida_usuario($email,$pass);
			

			if ($validado == 1) {
				redirect('cprincipal');
			}
			else {
				if ($validado == 2) {
					$validadot = $this->mmensaje->mensaje('Usted no está autorizado, consulte al administrador del sistema.');
					/*$mensaje='';
					$entrada['datos'] = array();
					$entrada['datos'] = array('mensaje'   => $mensaje,
											  'validadot' => $validadot);					
					$this->load->view('vlogin',$entrada);*/
					$this->load->view('vlogin');
				}
				else {
					if ($validado == 3) {
						$validadot = $this->mmensaje->mensaje('Usuario o Clave incorrecta. Por favor vuelva a intentarlo, si el problema persiste contacte al Administrador.');
						$mensaje='';
						$entrada['datos'] = array();
						$entrada['datos'] = array('mensaje'   => $mensaje,
												  'validadot' => $validadot);
						$entrada['main_content'] = 'vlogin';
						$this->load->view('includes/template',$entrada);
						/*$entrada['main_content'] = 'vlogin';
						$this->load->view('includes/template',$entrada);
						$this->load->view('vlogin',$entrada);*/
					}
				}
			}					 
		}
		else {
			/*$mensaje='';
			$validadot = '';
			$entrada['datos'] = array();
			$entrada['datos'] = array('mensaje'   => $mensaje,
									  'validadot' => $validadot);*/
			$entrada['main_content'] = 'vlogin';
			$this->load->view('includes/template',$entrada);
			//$this->load->view('vlogin');
		}
	}
	
}
