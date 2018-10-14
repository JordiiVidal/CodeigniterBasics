<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
		parent:: __construct();
		$this->load->helper(array('getmenu'));//autoload esta por defecto url y form
		$this->load->database();
		$this->load->model('User');
	}

	public function index()
	{   
        $data['menu'] = main_menu();
		$this->load->view('register',$data);
		$query = $this->db->get('usuarios');
		var_dump($query->result());
	}

	public function create(){
		$username = $this-> input->post('username');
		$email = $this-> input->post('email');
		$password = $this-> input->post('password');
		$password_c = $this-> input->post('password_confirm');
		var_dump($username." ".$email." ".$password." ".$password_c);
		$datos = array(
			'nombre_usuario' => $username,
			'correo' => $email,
			'contrasena' => $password,
		);

		$data['menu'] = main_menu();
		if(!$this ->User -> create($datos)){
			$data['msg'] = 'Problema';
			$this -> load->view('register',$data);
		}else{
			$data['msg'] = 'Registrado';
			$this -> load->view('register',$data);
		};
	}

}
