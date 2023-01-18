<head>
    <title>Informe</title>
</head>
<!-- Contenido Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Informe</h1>
                <?php
                // include_once '../utils/database/conexion.php';
                // $objeto = new Conexion();
                // $conexion = $objeto->ConexionDB();

                // $consulta = "SELECT id, nombre, pais, edad FROM personas";
                // $resultado = $conexion->prepare($consulta);
                // $resultado->execute();
                // $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <a class="btn btn-success mt-3" href="">
                    <i class="fa fa-plus"></i> Asignar Profesor</a>
                <a class="btn btn-dark mt-3 ml-2" href="">
                    <i class="fa-solid fa-brush"></i> Limpiar aprobados</a>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    
                </ol>
            </div> -->
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de micros</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Materia</th>
                                    <th>Profesor</th>
                                    <th>Periodo</th>
                                    <th>Horario</th>
                                    <th>Micro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>esto</td>
                                    <td>son</td>
                                    <td>carreras</td>
                                    <td>carreas</td>
                                    <td>carreras</td>
                                    <td>carreras</td>
                                    <td>carreras</td>
                                    <!-- COLUMNA MICRO -->
                                    <!-- <c:if test="${a.micro == 1}">
                                                        <td class="text-center"><span class="badge badge-danger">Pendiente</span></td>
                                                    </c:if>
                                                    <c:if test="${a.micro == 2}">
                                                        <td class="text-center"><span class="badge badge-info">Correcion</span></td>
                                                    </c:if>
                                                    <c:if test="${a.micro == 3}">
                                                        <td class="text-center"><span class="badge badge-success">Aprobado</span></td>
                                                    </c:if>
                                                    </td>    -->
                                    <!-- EDITAR / AGREGAR COMENTARIO -->

                                    <!-- APROBADO /CORREGIDO/ENTREGADO MICRO -->

                                    <!-- ELIMINAR PROFESORES -->
                                    <!-- <input type="hidden" id="id_asignacion" value="${a.id_asignacion}">
                                                        <a id="delete" href="">
                                                            <button id="btnEliminar1" type="button" class="btn" data-toggle="tooltip" title="Eliminar" data-original-title="Eliminar">
                                                                <i class="fa fa-trash"></i></button>
                                                        </a>
                                                    </td> -->
                                </tr>
                                <tr>
                                    <td>hola</td>
                                    <td>me gsf</td>
                                    <td>ffs8s</td>
                                    <td>no c</td>
                                    <td>aja</td>
                                    <td>sisisf</td>
                                    <td>fsxddddf</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.Contenido -->
<script src="assets/js/datatable.js" ></script>
