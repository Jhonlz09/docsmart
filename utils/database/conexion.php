<?php 

class Conexion {
    static public function ConexionDB(){
        $host = "localhost" ;
        $dbname = "prueba" ;
        $username = "postgres" ;
        $password = "admin" ;
        $port = "5433";
        $opciones = array(
            PDO::ATTR_EMULATE_PREPARES => false,);
        try{
            $conexion = new PDO("pgsql:host=$host; port=$port; dbname=$dbname", $username, $password, $opciones); 
            return $conexion;
        }catch(PDOException $e){
            echo("No se pudo conectar a la base de datos, $e");
        }
    }
}
?>