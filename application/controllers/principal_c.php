<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Principal_c extends CI_Controller
{//controlador de la vista principal

	public function __construct(){
           
          parent::__construct();
          
            $this->load->helper(array('html', 'url'));
            //cargamos el link
			$this->load->library('email');
			//cargamos la libreria email que necesitaremos para envio de mails
       }
	
	function index(){
		$this->muestraPrincipal();
	}//ejecuta la funcionPrincipal
	
	function muestraPrincipal() 
	{	
			$this->load->view('principal_v',NULL);
	}//aqui carga la vista principal
	
	function enviaMail(){
		switch ($_POST['tipoAsunto']) {
			case '1':
				$tipoAsunto= 'Servicio';
				break;
			case '2':
				$tipoAsunto= 'Software';
				break;
			case '3':
				$tipoAsunto= 'Acceso a Red';
				break;
			case '4':
				$tipoAsunto= 'Otros';
				break;
			default:
				$tipoAsunto= 'No se especifico tipo de asunto';
				
				break;
		} 
		
		//Configuración para mandar el correo
		$config['protocol'] = 'mail';
		$config['wordwrap'] = FALSE;				
		$config['mailtype']='html';
		$config_email['send_multipart'] = FALSE;  
		$this->email->initialize($config);
		//configuraciones originales de la api mail

		if($_POST['tipoCorreo'] == 1){
			$this->email->from($_POST['correo'].'@xanum.uam.mx', 'Servicio de comentarios para LDCBI');
		}else{
			$this->email->from($_POST['correo'].'@correo.uam.mx', 'Servicio de comentarios para LDCBI');
		}
		//en este if es donde va el sujeto de quien manda el correo, recordando que son de estos dos tipos
		$this->email->to('brass3a4@gmail.com');
		//mail destino del correo esta es uan cuenta personal, falta que nos den el que usara la coordicacion
		$this->email->subject($tipoAsunto);
		$msj='El mensaje al servicio de comentarios para LDCBI es: '.$_POST['comentario'];			
		//mensaje del correo, iniciamos con uan cadena de caracteres y seguido de el comentario escrito por el usuario
		$this->email->message($msj);				
		$this->email->send();
		echo "<script>
		alert('Tu comentario se ha enviado a LDCBI')
		window.close()</script>";
		//echo $this->email->print_debugger();
		//mas configuraciones originales de la api
		$this->muestraPrincipal();
		//despues de mandar el mail, hacer una ventana emergente, regresamos a la vista principal
	}

}

?>
