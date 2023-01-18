<?php
require_once "../utils/database/conexion.php";

use PhpOffice\PhpSpreadsheet\IOFactory;


class SilabosModelo{

    static public function mdlCargaMasiva($fileSilabos){

        $nombreArchivo = $fileSilabos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaSilabos = $documento->getSheet(0);
        $numeroFilasSilabos = $hojaSilabos->getHighestDataRow();

        $silabosRegistrados = 0;


            //CICLO FOR PARA REGISTROS DE SILABOS
            for ($i=3; $i <= $numeroFilasSilabos; $i++) { 
                $id_profesor = SilabosModelo::mdlBuscarIdProfesor($hojaSilabos->getCell("B".$i), $hojaSilabos->getCell("A".$i));
                $id_materia = SilabosModelo::mdlBuscarIdMateria($hojaSilabos->getCell("C".$i));
                $id_periodo = $hojaSilabos->getCell("D".$i);
                $id_horario = SilabosModelo::mdlBuscarIdHorario($hojaSilabos->getCell("E".$i));
                $id_temp = SilabosModelo::mdlBuscarIdAnio($hojaSilabos->getCell("F".$i));      
                

                if(!empty($id_profesor)){
                    $stmt = Conexion::ConexionDB()->prepare("INSERT INTO tblasignar(id_profesor, id_materia, id_periodo, id_horario, id_temp)
                                                                        VALUES (".$id_profesor[0].",
                                                                                ".$id_materia[0].",
                                                                                :id_periodo,
                                                                                ".$id_horario[0].",
                                                                                ".$id_temp[0].");");
                    $stmt -> bindParam(":id_periodo",$id_periodo,PDO::PARAM_STR);               
                    if($stmt->execute()){
                        $silabosRegistrados = $silabosRegistrados + 1;
                    }else{
                        $silabosRegistrados = 0;
                    }
                }
            }
        // }
        

        $respuesta = $silabosRegistrados;
        return $respuesta;
    }

    static public function mdlBuscarIdProfesor($nombres_profesor, $apellidos_profesor){

        $stmt = Conexion::ConexionDB()->prepare("SELECT id_profesor FROM tblprofesor WHERE nombres_profesor = :nombres_profesor AND apellidos_profesor=:apellidos_profesor");
        $stmt -> bindParam(":nombres_profesor", $nombres_profesor,PDO::PARAM_STR);
        $stmt -> bindParam(":apellidos_profesor", $apellidos_profesor,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }
    
    static public function mdlBuscarIdMateria($nombre_materia){

        $stmt = Conexion::ConexionDB()->prepare("SELECT id_materia FROM tblmaterias WHERE nombre_materia = :nombre_materia");
        $stmt -> bindParam(":nombre_materia", $nombre_materia,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }

    static public function mdlBuscarIdHorario($horario){

        $stmt = Conexion::ConexionDB()->prepare("SELECT id_horario FROM tblhorario WHERE horario = :horario");
        $stmt -> bindParam(":horario", $horario,PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }
    static public function mdlBuscarIdAnio($temporada){

        $stmt = Conexion::ConexionDB()->prepare("SELECT id_temp FROM tbltemporada WHERE temp = :temporada");
        $stmt -> bindParam(":temporada", $temporada,PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt->fetch();
    }
    static public function mdlListarSilabos(){
    
        $stmt = Conexion::ConexionDB()->prepare("SELECT a.id_asignacion, a.id_micro, p.id_profesor,p.nombres_profesor, p.apellidos_profesor, h.id_horario, h.horario,
                                                    pe.id_periodo,pe.semestre_modulo,m.id_materia,m.nombre_materia
                                                    FROM public.tblasignar a 
                                                    JOIN public.tblprofesor p ON a.id_profesor=p.id_profesor
                                                    JOIN public.tblhorario h ON a.id_horario = h.id_horario 
                                                    JOIN public.tblperiodo pe ON a.id_periodo = pe.id_periodo
                                                    JOIN public.tblmaterias m ON a.id_materia = m.id_materia WHERE a.estado_asignacion='A' ORDER BY a.id_asignacion");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }
}