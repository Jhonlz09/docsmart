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
    public function ajaxListarSilabos(){
    
        $productos = SilabosControlador::ctrListarSilabos();
    
        echo json_encode($productos);
    
    }

//     public function ajaxRegistrarSilabos(){
        
//         $producto = SilabosControlador::ctrRegistrarSilabos();

//         echo json_encode($producto);
//    }
}
if(isset($_POST['accion']) && $_POST['accion'] == 1){ // parametro para listar productos
    $productos = new ajaxSilabos();
    $productos -> ajaxListarSilabos();
}else if(isset($_FILES)){
    $archivo = new ajaxSilabos();
    $archivo-> fileSilabos = $_FILES['fileSilabos'];
    $archivo -> ajaxCargaMasiva();
}