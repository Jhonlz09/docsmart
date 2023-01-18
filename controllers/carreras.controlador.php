<?php

class ControladorCarreras {

    static public function ctrMostrarCarreras(){
        $data = ModeloCarreras::mdlMostrarCarreras();
        return $data;
    }
    static public function ctrAgregarCarreras($nombre_carrera){
        $data = ModeloCarreras::mdlAgregarCarreras($nombre_carrera);
        return $data;
    }
    static public function ctrEliminarCarreras($id_carrera){
        $data = ModeloCarreras::mdlEliminarCarreras($id_carrera);
        return $data;
    }
    static public function ctrEditarCarreras($id_carrera, $nombre_carrera){
        $data = ModeloCarreras::mdlEditarCarreras($id_carrera, $nombre_carrera);
        return $data;
    }
}