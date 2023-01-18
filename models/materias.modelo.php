<?php

require_once "../utils/database/conexion.php";

class ModeloMaterias{
    static public function mdlMostrarMaterias(){
        $l = Conexion::ConexionDB()->prepare("SELECT id_materia, nombre_materia, codigo_materia FROM tblmaterias WHERE estado_materia='A'");
        $l -> execute();

        return $l ->fetchAll();

        $l=null; 
        
    } 

    static public function mdlAgregarMaterias($codigo_materia, $nombre_materia){
        $a = Conexion::ConexionDB()->prepare("INSERT INTO tblmaterias(codigo_materia,nombre_materia) VALUES (:codigo_materia,:nombre_materia)");
        
        $a -> bindParam(":codigo_materia", $codigo_materia, PDO::PARAM_STR); 
        $a -> bindParam(":nombre_materia", $nombre_materia, PDO::PARAM_STR); 

        if($a -> execute()){
            return "La materia se agrego correctamente";
        }else{
            return "Error, no se pudo agregar la materia";
        }
        $a=null;      
    } 

    static public function mdlEliminarMaterias($id_materia){
        $e = Conexion::ConexionDB()->prepare("UPDATE tblmaterias SET estado_materia= 'I' WHERE id_materia=".$id_materia);

        if($e -> execute()){
            return "La materia se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar la materia";
        }
        $e=null;      
    } 
    static public function mdlEditarMaterias($id_materia,$codigo_materia,$nombre_materia){
        $u = Conexion::ConexionDB()->prepare("UPDATE tblmaterias SET codigo_materia=:codigo_materia, nombre_materia=:nombre_materia WHERE id_materia=".$id_materia);
        
        $u -> bindParam(":codigo_materia", $codigo_materia, PDO::PARAM_STR); 
        $u -> bindParam(":nombre_materia", $nombre_materia, PDO::PARAM_STR); 
        
        if($u -> execute()){
            return "La materia se edito correctamente";
        }else{
            return "Error, no se pudo editar la materia";
        }
        $u=null;      
    } 

}