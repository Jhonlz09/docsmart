<?php

require_once "../utils/database/conexion.php";

class ModeloProfesores{
    static public function mdlMostrarProfesores(){
        $l = Conexion::ConexionDB()->prepare("SELECT id_profesor, cedula, nombres_profesor, apellidos_profesor FROM tblprofesor WHERE estado='A'");
        $l -> execute();

        return $l ->fetchAll();

        $l=null; 
        
    } 

    static public function mdlAgregarProfesores($cedula, $nombres_profesor, $apellidos_profesor){
        $a = Conexion::ConexionDB()->prepare("INSERT INTO tblprofesor(cedula,nombres_profesor,apellidos_profesor) VALUES (:cedula,:nombres_profesor,:apellidos_profesor)");
        
        $a -> bindParam(":cedula", $cedula, PDO::PARAM_STR); 
        $a -> bindParam(":nombres_profesor", $nombres_profesor, PDO::PARAM_STR); 
        $a -> bindParam(":apellidos_profesor", $apellidos_profesor, PDO::PARAM_STR);

        if($a -> execute()){
            return "El profesor se agrego correctamente";
        }else{
            return "Error, no se pudo agregar la profesor";
        }
        $a=null;      
    } 

    static public function mdlEliminarProfesores($id_profesor){
        $e = Conexion::ConexionDB()->prepare("UPDATE tblprofesor SET estado= 'I' WHERE id_profesor=".$id_profesor);

        if($e -> execute()){
            return "EL profesor se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar el profesor";
        }
        $e=null;      
    } 
    static public function mdlEditarProfesores($id_profesor,$cedula,$nombres_profesor, $apellidos_profesor){
        $u = Conexion::ConexionDB()->prepare("UPDATE tblprofesor SET cedula=:cedula, nombres_profesor=:nombres_profesor, apellidos_profesor=:apellidos_profesor WHERE id_profesor=".$id_profesor);
        
        $u -> bindParam(":cedula", $cedula, PDO::PARAM_STR); 
        $u -> bindParam(":nombres_profesor", $nombres_profesor, PDO::PARAM_STR); 
        $u -> bindParam(":apellidos_profesor", $apellidos_profesor, PDO::PARAM_STR); 

        if($u -> execute()){
            return "El profesor se edito correctamente";
        }else{
            return "Error, no se pudo editar el profesor";
        }
        $u=null;      
    } 

}