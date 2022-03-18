<?php

    require_once("conexion.php");
    class Usuario extends Conexion{
        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function insertarUsuario($nombre, $email, $password){
            //prepare == prepara la consulta SQL enviada-> Insert Into
            $tabla = $this->db->prepare("INSERT INTO usuario(nombre, email, password) 
            VALUE(:nombre, :email, :password)");
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
            //PARA IDENTIFICAR EL ULTIMO REGISTRO  UTILIZO
            $idUsuario = $this->db->lastInsertId();
            return $idUsuario;
        }

        public function getUsuario(){
            $rows=NULL;
            $tabla = $this->db->prepare("SELECT id, nombre, email, password FROM usuaio");
            $tabla->execute();
            while ($result = $tabla->fletch()) {
                $rows[] = $result;
            }
            return $rows;
        }
    }

?>