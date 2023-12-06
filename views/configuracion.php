<head>
    <title>Configuracion</title>
</head>

<!-- Contenido Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Configuracion</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<section class="content scroll">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="display: inline-flex; align-items: center;">
                        <h3 class="card-title mr-3">Datos generales</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form  id="formConfig" enctype="multipart/form-data" autocomplete="off">
                            <!-- <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input autocomplete="off" type="text" class="form-control form-control-border border-width-2" id="username" placeholder="Ingresa tu nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input autocomplete="off" type="text" class="form-control form-control-border border-width-2" id="email" placeholder="Ingresa tu correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input autocomplete="off" type="password" class="form-control form-control-border border-width-2" id="password" placeholder="Ingresa tu contraseña">
                            </div>

                            <div class="form-group">
                                <label for="archivoImagen">Logo</label>
                                <input class="form-control" accept=".png, .jpg, .jpeg, .webp, .ico" type="file" name="archivoImagen" id="archivoImagen">
                            </div> -->

                            <div class="form-group">
                                <label for="cboGrafico">Grafico de Inicio</label>
                                <select name="cboGrafico" id="cboGrafico" class="form-control select2 select2-danger" data-dropdown-css-class="select2-dark">
                                    <option value="1">Documentos por mes</option>
                                    <option value="2">Documentos por tipo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="notifications">Notificaciones</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="notifications">
                                    <label class="custom-control-label" for="notifications">Activar micros</label>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-small w-100 text-center" id="btnGuardar"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        </form>
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

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2({
            minimumResultsForSearch: -1,
            
        })
    })
</script>