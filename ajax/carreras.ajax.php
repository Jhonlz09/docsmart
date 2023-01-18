<?php

require_once "../controllers/carreras.controlador.php";
require_once "../models/carreras.modelo.php";
class ajaxCarreras{

    public $nombre_carrera;
    public $id_carrera;

    public function MostrarCarreras(){

        $data = ControladorCarreras::ctrMostrarCarreras();

        echo json_encode($data);
    }
    public function agregarCarreras(){

        $data = ControladorCarreras::ctrAgregarCarreras($this-> nombre_carrera);

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function eliminarCarreras(){

        $data = ControladorCarreras::ctrEliminarCarreras($this->id_carrera);
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function editarCarreras(){

        $data = ControladorCarreras::ctrEditarCarreras($this->id_carrera, $this-> nombre_carrera);
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}

if(!isset($_POST["accion"])){
    $data = new ajaxCarreras();
    $data -> MostrarCarreras();
}else{
    if($_POST["accion"] == "agregar"){
        $agregar = new ajaxCarreras();
        $agregar ->nombre_carrera = $_POST["nombre_carrera"];
        $agregar ->agregarCarreras();
    }
    if($_POST["accion"] == "delete"){
        $eliminar = new ajaxCarreras();
        $eliminar ->id_carrera = $_POST["id_carrera"];
        $eliminar ->eliminarCarreras();
    } 
    if($_POST["accion"] == "editar"){
        $editar = new ajaxCarreras();
        $editar ->id_carrera = $_POST["id_carrera"];
        $editar ->nombre_carrera = $_POST["nombre_carrera"];
        $editar ->editarCarreras();
    }
}
