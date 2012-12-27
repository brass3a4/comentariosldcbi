<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Principal_c extends CI_Controller
{

	public function __construct(){
           
          parent::__construct();
          
            $this->load->helper(array('html', 'url'));
			$this->load->library('email');
       }
	
	function muestraPrincipal() 
	{	
			$this->load->view('principal_v',NULL);
	}
	
	function enviaDatos($id)
	{
			
			foreach($_POST as $key =>$campo)
			{
					print_r ($key);		
			}
			
			print_r($_POST['comentario']);
	}

	function enviaMail($asunto){
		switch ($asunto) {
			case '1':
				$tipoAsunto= 'Servicio';
				break;
			case '2':
				$tipoAsunto= 'software';
				break;
			case '3':
				$tipoAsunto= 'Acceso a Red';
				break;
			case '4':
				$tipoAsunto= 'Otros';
				break;
			default:
				$tipoAsunto= 'No se especifico';
				break;
		} 
		
		//Configuración para mandar el correo
		$config['protocol'] = 'mail';
		$config['wordwrap'] = FALSE;				
		$config['mailtype']='html';
		$config_email['send_multipart'] = FALSE;  
		$this->email->initialize($config);
		if($_POST['tipoCorreo'] == 1){
			$this->email->from($_POST['correo'].'@xanum.uam.mx', 'LDCBI');
		}else{
			$this->email->from($_POST['correo'].'@correo.uam.mx', 'LDCBI');
		}	
		$this->email->to('brass3a4@gmail.com');
		$this->email->subject($tipoAsunto);
		$msj='El mensaje a LDCB es '.$_POST['comentario'];			
		$this->email->message($msj);				
		$this->email->send();
		echo "<script>
		alert('Tu comentario se ha enviado a LDCBI')
		window.close()</script>";
		echo $this->email->print_debugger();
	}

}

?>
