<?php  
    class Conexion{
        private             $db;
        protected           $driver = "mysql";
        private             $host = "localhost";
        protected           $based = "adsi_2338368";
        protected           $usuario = "root";
        protected           $password = "";

        public function __construct(){
            if ($db = new PDO("{$this->driver}:host={$this->host};
            dbname={$this->based}", $this->usuario, $this->password)) {
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
                //echo "La conexion se establecio satisfactoriamente". print_r($db);
            }else{
                echo"Se ha presentado un error de conexión, a la Bd";
            }
            
        }        
        
    } //end clase

    /* $objConexion = new Conexion();
    print_r($objConexion); */
?>