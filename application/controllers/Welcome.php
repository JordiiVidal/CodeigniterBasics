<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test($id,$hola = 'hola'){
		echo 'hola mundo '.$id;
		echo $hola;

		//Url CONNTROLADOR/METODO/Argmentos
	}
	public function vistas(){
		$data['title'] = 'Desde las vistas';
		$data['list'] = array('negro','blanco');
		$this->load->view('vistas', $data);
		$this->load->view('footer');
	}
}
