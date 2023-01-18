<?php
require_once "../utils/database/conexion.php";

class ModeloCarreras{
    static public function mdlMostrarCarreras(){
        $l = Conexion::ConexionDB()->prepare("SELECT id_carrera, nombre_carrera, 'X' as acciones FROM tblcarrera WHERE estado_carrera='A'");
        $l -> execute();

        return $l ->fetchAll();

        $l=null;      
    } 

    static public function mdlAgregarCarreras($nombre_carrera){
        $a = Conexion::ConexionDB()->prepare("INSERT INTO tblcarrera(nombre_carrera) VALUES (:nombre_carrera)");
        
        $a -> bindParam(":nombre_carrera", $nombre_carrera, PDO::PARAM_STR); 
        
        if($a -> execute()){
            return "La carrera se agrego correctamente";
        }else{
            return "Error, no se pudo agregar la carrera";
        }
        $a=null;      
    } 

    static public function mdlEliminarCarreras($id_carrera){
        $e = Conexion::ConexionDB()->prepare("UPDATE tblcarrera SET estado_carrera= 'I' WHERE id_carrera=".$id_carrera);

        if($e -> execute()){
            return "La carrera se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar la carrera";
        }
        $e=null;      
    } 
    static public function mdlEditarCarreras($id_carrera,$nombre_carrera){
        $u = Conexion::ConexionDB()->prepare("UPDATE tblcarrera SET nombre_carrera=:nombre_carrera WHERE id_carrera=".$id_carrera);
        
        $u -> bindParam(":nombre_carrera", $nombre_carrera, PDO::PARAM_STR); 
        
        if($u -> execute()){
            return "La carrera se edito correctamente";
        }else{
            return "Error, no se pudo editar la carrera";
        }
        $u=null;      
    } 
}
