<?php


    class Conexion{

        private $db;
        public $driver = "mysql";
        protected $host = "localhost";
        private $based = "adsi_2338368";
        private $usuario = "root";
        private $contraseña = "";

        public function __construct()
        {
            try {
                $db = new PDO("{$this->driver}:host={$this->host};
                dbname={$this->based}", $this->usuario, $this->contraseña);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "La conexion ala Bd es exitosa ";
            } catch (PDOException $e) {
                echo "Error de conexion a la bd. ".$e->getMessage();
            }
        }
    }

    $objConexion = new Conexion();
    print_r($objConexion);
?>