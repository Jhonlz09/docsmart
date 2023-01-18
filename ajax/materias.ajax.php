<?php

require_once "../controllers/materias.controlador.php";
require_once "../models/materias.modelo.php";

class ajaxMaterias{
    public $codigo_materia;
    public $nombre_materia;
    public $id_materia;

    public function MostrarMaterias(){

        $data = ControladorMaterias::ctrMostrarMaterias();

        echo json_encode($data);
    }
    public function agregarMaterias(){

        $data = ControladorMaterias::ctrAgregarMaterias($this->codigo_materia, $this-> nombre_materia);

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function eliminarMaterias(){

        $data = ControladorMaterias::ctrEliminarMaterias($this->id_materia);
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function editarMaterias(){

        $data = ControladorMaterias::ctrEditarMaterias($this->id_materia, $this->codigo_materia, $this-> nombre_materia);
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}



if(!isset($_POST["accion"])){
    $data = new ajaxMaterias();
    $data -> MostrarMaterias();
}else{
    if($_POST["accion"] == "agregar"){
        $agregar = new ajaxMaterias();
        $agregar ->codigo_materia = $_POST["codigo_materia"];
        $agregar ->nombre_materia = $_POST["nombre_materia"];
        $agregar ->agregarMaterias();
    }
    if($_POST["accion"] == "delete"){
        $eliminar = new ajaxMaterias();
        $eliminar ->id_materia = $_POST["id_materia"];
        $eliminar ->eliminarMaterias();
    } 
    if($_POST["accion"] == "editar"){
        $editar = new ajaxMaterias();
        $editar ->id_materia = $_POST["id_materia"];
        $editar ->codigo_materia = $_POST["codigo_materia"];
        $editar ->nombre_materia = $_POST["nombre_materia"];
        $editar ->editarMaterias();
    }
}