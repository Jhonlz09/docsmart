<head>
    <title>Silabos</title>
</head>
<!-- Contenido Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Silabos</h1>
                <button id="btnNuevo" class="btn btn-success mt-3" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-plus"></i> Nueva asignacion</button>
            </div>
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
                        <h3 class="card-title">Listado de silabos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tbl" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>MATERIA</th>
                                    <th>PROFESOR</th>
                                    <th>PERIODO</th>
                                    <th>HORARIO</th>
                                    <th>MICRO</th>
                                    <th class="text-center">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>   
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

<!-- Modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-nuevo">
            <div class="modal-header header-color-nuevo">
                <h4 class="modal-title title-nuevo">Nueva Materia</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formNuevo" autocomplete="off">
                    <input type="hidden" id="id_materia" name="materia" value="">
                    <div class="form-row-nuevo">
                        <div class="input-data">
                            <input id="codigo_materia" class="input-nuevo" type="text" required>
                            <div class="line underline"></div>
                            <label class="barra label">Codigo</label>
                        </div>
                        <div class="input-data">
                            <input id="nombre" class="input-nuevo" type="text" required>
                            <div class="line underline"></div>
                            <label  class="barra label">Nombre de la materia</label>
                        </div>
                    </div>
                    <br>
                    <div class="justify-content-between">
                        <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa-solid fa-right-from-bracket"></i> Cerrar</button>
                        <button id="btnAgregar" type="button" class="btn btn-success"><i class="fa-solid fa-user-plus"></i><span class="button-text"> Agregar</span></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.Modal -->

    <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jszip/jszip.min.js"></script>
    <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <script src="assets/js/silabos.js"></script>