<?php
    class User extends CI_Model{
        function __construct(){
            $this ->load ->database();
        }
        public function create($data){
            $data = array(
                'nombre_usuario' => $data['nombre_usuario'],
                'correo' => $data['correo'],
                'contrasena' => $data['contrasena'],
                'status' => 1,
                'range' => 2,
            );
            if(!$this->db->insert('usuarios',$data)){
                return false;
            }else{
                return true;
            };
        }
    } 