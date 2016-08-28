<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mmensaje extends CI_Model {
	
	public function __construct () {
		parent::__construct ();
	}

	public function mensaje($cuerpo_mensaje = '', $titulo = 'Informaci&oacute;n!') {
		$mensaje = '<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>'.$titulo.'</h4>
					'.$cuerpo_mensaje.'
					</div>';
		return $mensaje;
	}
	
}

/* End of file Mmensaje.php */
/* Location: ./application/model/Mmensaje.php */
