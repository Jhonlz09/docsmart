<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/67b7b97383.js" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/alt/adminlte.min.css">
    <!-- Estilo css -->
    <link href="assets/css/estilos2.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Icono ventana -->
    <link rel="icon" href="assets/img/logoTES.ico">


    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/adminlte/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <!-- SweetAlert -->
    <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
        include "modules/navbar.php";
        include "modules/sidebar.php";

        // Content Wrapper.-->
        echo '<div class="content-wrapper">';

        include_once "views/inicio.php";

        echo '</div>';
        ?>
    </div>
    <script>
        function cargarContenido(contenedor, contenido) {
            $("." + contenedor).load(contenido);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.setA').on("click", function() {
                $('.setA').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>