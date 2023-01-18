<?php


class SilabosControlador{

    static public function ctrCargaMasiva($fileSilabos){
        
        $respuesta = SilabosModelo::mdlCargaMasiva($fileSilabos);
        
        return $respuesta;
    }
    static public function ctrListarSilabos(){
    
        $silabos = SilabosModelo::mdlListarSilabos();
    
        return $silabos;
    
    }

}