<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="shortcut icon" href="#" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Iniciar sesion</title>
        <script src="https://kit.fontawesome.com/67b7b97383.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css?n=1"> 
        <link rel="stylesheet" href="assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fuentes/iconic/css/material-design-iconic-font.min.css">
    </head>
    <body>

    <div class="bg-header header-login">
            <header class="container header">
                <img src="assets/img/LogoIndex.png" alt=""/>
            </header>
        </div>
    <div class="container-login">
        <div class="wrap-login">
            <form autocomplete="off" class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">Iniciar sesion</span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                <i class="fa-solid fa-user icon"></i>
                    <input  autocomplete="new-password"class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Contraseña incorrecta">
                    <i class="fa-solid fa-lock icon"></i>
                    <input autocomplete="new-password"class="input100" type="password" id="password" name="password" placeholder="Contraseña">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        
                        <button type="submit" name="submit" class="login-form-btn">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>   

        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/popper/popper.min.js" type="text/javascript"></script>
        <script src="assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>