<?php

class ControladorMaterias {

    static public function ctrMostrarMaterias(){
        $data = ModeloMaterias::mdlMostrarMaterias();
        return $data;
    }
    static public function ctrAgregarMaterias($codigo_materia, $nombre_materia){
        $data = ModeloMaterias::mdlAgregarMaterias($codigo_materia, $nombre_materia);
        return $data;
    }
    static public function ctrEliminarMaterias($id_materia){
        $data = ModeloMaterias::mdlEliminarMaterias($id_materia);
        return $data;
    }
    static public function ctrEditarMaterias($id_materia, $codigo_materia, $nombre_materia){
        $data = ModeloMaterias::mdlEditarMaterias($id_materia, $codigo_materia ,$nombre_materia);
        return $data;
    }
}