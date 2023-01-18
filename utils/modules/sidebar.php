<?php
function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$current_page = PageName();

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="assets/img/logoTES.png" alt="logo" class="brand-image" />
        <span class="brand-text font-weight-light">Tecnológico Espíritu Santo</span><br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="info">
                <p style=" margin-top:revert; color: white;text-align: center;font-size: 18px;font-weight: 600; font-family: system-ui;">
                    Bienvenido, Administrador</p>

            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul id="nav" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/inicio.php')" class="nav-link setA active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/silabos.php')" class="nav-link setA">
                        <i class="nav-icon fa-solid fa-clipboard"></i>
                        <p>Silabos</p>
                    </a>                  
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/carga.php')" class="nav-link setA">
                        <i class="nav-icon fa-solid fa-upload"></i>
                        <p>Cargar</p>
                    </a>                  
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/carreras.php')" class="nav-link setA">
                        <i class="fa-solid fa-graduation-cap nav-icon"></i>
                        <p>Carreras</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/materias.php')" class="nav-link setA">
                        <i class="fa fa-book nav-icon"></i>
                        <p>Materias</p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/profesores.php')" class="nav-link setA">
                        <i class="fa-solid fa-person-chalkboard nav-icon"></i>
                        <p>Profesores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a onclick="cargarContenido('content-wrapper','views/informe.php')" class="nav-link setA">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Informe</p>
                    </a>                  
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- /.Main Sidebar Container -->