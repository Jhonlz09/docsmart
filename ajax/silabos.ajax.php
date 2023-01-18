<?php

require_once "../controllers/silabos.controlador.php";
require_once "../models/silabos.modelo.php";

require_once "../vendor/autoload.php";

class ajaxSilabos{

    public $fileSilabos;

    public function ajaxCargaMasiva(){
        $respuesta = SilabosControlador::ctrCargaMasiva($this->fileSilabos);
        
        echo json_encode($respuesta);
    }
}

if(isset($_FILES)){
    $archivo = new ajaxSilabos();
    $archivo-> fileSilabos = $_FILES['fileSilabos'];
    $archivo -> ajaxCargaMasiva();
}