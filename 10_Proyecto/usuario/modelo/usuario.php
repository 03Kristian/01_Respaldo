<?php
    require_once("../../conexion/conexionbd.php");
    session_start();

    class Usuario extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM usuario
            WHERE email = :email AND password = :password");
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
            //rowCount busca en la tabla una coincidencia si la encontro == 1
            if ($tabla->rowCount()==1) {
                $loginUsuario = $tabla->fetch();
                $_SESSION['email'] = $loginUsuario['email'];
                $_SESSION['password'] = $loginUsuario['password'];

                echo "Inicion de Sesion Satisfactorio!! ";
            }else{
                echo "Fallo al Iniciar Sesion Prro. Verifique sus datos";
            }
        }//End login

        public function validarsesionUsuario(){
            if ($_SESSION['email']==Null) {
               header('Location: ../../Index.php');
            }
        } 

       public function getnombreUsuario(){
            return $_SESSION['email'];
        } 

        public function salirUsuario(){
            
            //session_start();
            unset($_SESSION["email"]);
            session_destroy();
            header('refresh:3 url=../../Index.php');
            //header("refresh:3; url=../");
            echo "Cerrando Sesion...";
        
        }

        public function insertarUsuario($nombre,$email,$password){
            //prepare prepra consulta SQL enviada ->isert into
    
            $tabla=$this->db->prepare("INSERT INTO usuario(nombre, email, password)VALUE(:nombre, :email, :password)");
    
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();


            /* if($tabla->execute()){
            echo "registro de usuario satisfactorio";
            header('refresh:3; url=../vista/add.php');
            }else{
                echo "fallo al insertar registro";
                header('refresh:2; url=../../index.php');
            } */
    
        }
        
        /* public function insertarUsuario($nombre, $email, $password){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO usuario(nombre, email, password) 
            VALUE(:nombre, :email, :password)");
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            
            if ($tabla->execute()){
                echo "Registro de usuario satisfactorio.. ";
                header('refresh:3; url=../vista/add.php');
            }else{
                echo " Fallaste al Registrarte Prro, Intenta de nuevo!!";
                header('refresh:2; url=../../Index.php');
            }
        } */
        public function getUsuarios(){
            $rows = NULL;
            $tabla = $this->db->prepare("SELECT id, nombre, email, password FROM
                usuario");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows [] = $result;}
            return $rows;
            }
    }//End class

?>