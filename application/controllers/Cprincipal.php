<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprincipal extends CI_Controller {

	/**
	 * Comtrolador para el Login
	 */
	public function index()
	{
		$entrada['main_content'] = 'vprincipal';
		$this->load->view('includes/template',$entrada);
		//$this->load->view('vprincipal');
	}
}
