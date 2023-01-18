<head>
    <title>Cargar</title>
</head>

<!-- Contenido Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cargar silabos</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- FILA PARA INPUT FILE -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Seleccionar archivo de carga</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" id="form_carga_silabos">
                            <div class="row">
                                <div class="col-lg-10">
                                    <input style="border-color: #343a40;" type="file" name="fileSilabos" id="fileSilabos" class="form-control"
                                        accept=".xls, .xlsx">
                                </div>
                                <div class="col-lg-2" style="margin: auto; text-align: center;">
                                    <button type="submit" value="Cargar" class="btn btn-primary"
                                        id="btnCargar"><i class="fa-solid fa-arrow-up-from-bracket mr-2"></i> <span style="display: inline-block;">Cargar silabos</span></button>
                                </div>
                            </div>
                        </form>

                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <!-- FILA PARA IMAGEN DEL GIF -->
        <div class="row mx-0">
            <div class="col-lg-12 mx-0 text-center">
                <img src="assets/img/loading-29.gif" id="img_carga"  style="display:none;">
            </div>
        </div> 
    </div><!-- /.container-fluid -->
</div>

<script src="assets/js/carga.js"></script>