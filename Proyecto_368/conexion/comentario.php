<?php 
    require_once("conexionbd.php");

    class Comentario extends Conexion{

        public function __construct(){
            $this->db = parent::__construct();
        }
        
        public function insertarComentario($comentario, $fecha, $usuarioId, $sitioId){
            $table = $this->db->prepare("INSERT INTO comentario(comentario, fecha, usuarioId, sitioId)
            VALUES (:comentario, :fecha, :usuarioId, :sitioId)");
            $table->bindParam(':comentario', $comentario);
            $table->bindParam(':fecha', $fecha);
            $table->bindParam(':usuarioId', $usuarioId);
            $table->bindParam(':sitioId', $sitioId);
            $table->execute();
            $comentarioId = $this->db->lastInsertId();
            return $comentarioId;
        }

        public function verComentarios(){
            $rows = null;
            $table = $this->db->prepare("SELECT comentario.id, nombre, comentario, fecha, sitioId 
            FROM comentario, usuario 
            WHERE usuario.id=usuarioId" );
            $table->execute();
            while ($resultado = $table->fetch()) {
                $rows[] = $resultado;
            }
            return $rows;
        }

        public function actualizarComentario($id, $comentario, $fecha, $usuarioId, $sitioId ){
            $table = $this->db->prepare("UPDATE comentario 
            SET comentario = :comentario, fecha = :fecha, usuarioId = :usuarioId, sitioId = :sitioId
            WHERE id = $id");
            $table->bindParam(':comentario', $comentario);
            $table->bindParam(':fecha', $fecha);
            $table->bindParam(':usuarioId', $usuarioId);
            $table->bindParam(':sitioId', $sitioId);
            $table->execute();
            return $table;

        }

        public function eliminarComentario($id){
            $table = $this->db->prepare("DELETE FROM comentario WHERE id = :id");
            $table->bindParam(':id', $id);
            $table->execute();
            return $table;
        }
            
        

    }//end clase
?>