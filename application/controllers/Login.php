<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper(array('getmenu', 'url'));
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$data['menu'] = main_menu();
		$this->load->view('login', $data);
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
