<?php

require_once("conexionbd.php");

class Comentario extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
    
    public function insertarComentario($comentario, $fecha, $usuarioId, $sitioId){
        $table =$this->db->prepare("INSERT INTO comentario(comentario, fecha, usuarioId, sitioId)
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
        FROM comentario,usuario
        WHERE usuario.id=usuarioId");

    }


}
?>