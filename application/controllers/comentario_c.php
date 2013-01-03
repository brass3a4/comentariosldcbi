<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comentario_c extends CI_Controller
//declaramos nuestro controlados correspondiente a la vista
{

	public function __construct(){
           
          parent::__construct();
          
            $this->load->helper(array('html', 'url'));
            //se declara el arreglo con el que se le manda la url
       }
	
	function index() 
	{	
			$this->load->view('comentario_v',NULL);
			//se declara el arreglo con el que se carga la vista
	}

}

?>
