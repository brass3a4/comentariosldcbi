<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comentario_c extends CI_Controller
{

	public function __construct(){
           
          parent::__construct();
          
            $this->load->helper(array('html', 'url'));
       }
	
	function index() 
	{	
			$this->load->view('comentario',NULL);
	}

}

?>