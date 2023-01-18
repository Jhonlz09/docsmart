<?php


class SilabosControlador{

    static public function ctrCargaMasiva($fileSilabos){
        
        $respuesta = SilabosModelo::mdlCargaMasiva($fileSilabos);
        
        return $respuesta;
    }
}