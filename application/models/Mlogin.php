<?php 

//Mlogin: Modelo que permite la validación de usuario

class Mlogin extends CI_Model {

	function valida_usuario($usuario, $clave) {   
		$id_usu = 3;
		//echo $usuario."<br>";
		//echo $clave."<br>";
		if ($usuario != '' and $clave != '' ) {	
			if ($usuario == 'prueba@avilasoftware.com.ve' and $clave == 'prueba')	{
				/*$dataSessionpersona = array( 'id'          	=> $row->id,
							 'nombres'        	=> 'Usuario',
							 'apellidos' 		=> 'Administrador',
							 'ced_pas'       	=> '1',
							 'fecha_nac' 		=> '',
							 'genero'       	=> '',
							 'direccion'       	=> 'Venezuela',
							 'telefono'      	=> '',
							 'nro_cel'      	=> '',
							 'email'        	=> '',
							 'nacionalidad' 	=> '',
							 'username'       	=> 'ADMSEM',
							 'password'       	=> 'ADMSEM',
							 'block'       		=> '',
							 'sendemail'       	=> '',
							 'registerdate'  	=> '',
							 'lastvisitdate' 	=> '',
							 'activation'       => '',
							 'lastresettime'  	=> '',
							 'resetcount'       => '',
							 'otpkey'       	=> '',
							 'otep'       		=> '',
							 'requirereset'  	=> '');
				$this->session->set_flashdata('dataSessionpersona', $dataSessionpersona);*/
				$id_usu = 1;
			}
			/*else {
				$sql = "SELECT id, nombres, apellidos, ced_pas, fecha_nac, genero, direccion, 
							   telefono, nro_cel, email, nacionalidad, username, password, block, 
							   sendemail, registerdate, lastvisitdate, activation, lastresettime, 
							   resetcount, otpkey, otep, requirereset
						FROM ".PUBLIC_PERSONA."
						WHERE UPPER(username) = '".$usuario."' AND password = '".$clave."';";
				$tquery=$this->db->query($sql);
				$tnum=$tquery->num_rows();
				if($tnum) {
					foreach ($tquery->result() as $row) {
						$dataSessionpersona = array( 'id'          	=> $row->id,
												 'nombres'        	=> $row->nombres,
												 'apellidos' 		=> $row->apellidos,
												 'ced_pas'       	=> $row->ced_pas,
												 'fecha_nac' 		=> $row->fecha_nac,
												 'genero'       	=> $row->genero,
												 'direccion'       	=> $row->direccion,
												 'telefono'      	=> $row->telefono,
												 'nro_cel'      	=> $row->nro_cel,
												 'email'        	=> $row->email,
												 'nacionalidad' 	=> $row->nacionalidad,
												 'username'       	=> $row->username,
												 'password'       	=> $row->password,
												 'block'       		=> $row->block,
												 'sendemail'       	=> $row->sendemail,
												 'registerdate'  	=> $row->registerdate,
												 'lastvisitdate' 	=> $row->lastvisitdate,
												 'activation'       => $row->activation,
												 'lastresettime'  	=> $row->lastresettime,
												 'resetcount'       => $row->resetcount,
												 'otpkey'       	=> $row->otpkey,
												 'otep'       		=> $row->otep,
												 'requirereset'  	=> $row->requirereset);
						}
					$this->session->set_flashdata('dataSessionpersona', $dataSessionpersona);
					$id_usu = 1;
				}
			}*/
		}
		return $id_usu;
	}
	
}

?>
