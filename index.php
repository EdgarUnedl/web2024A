<?php
//ESTEEEEEEEEE DOCUMENTOOOO ESTA EDITADO POR JOSKUA AHUMADA 
//CHATOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO

/*
 * Hola este es un comentario de Edgar
 * hola soy max

 * chipi chipi chapa chpa magico mi dubi dubi bum bum bum

 * 
 * Que onda soy Robert
 * Comentario de Alvaro
 * hola soy andres
 * chuy
 * Mi papa es el mejor programador
 * Comentario de Parra
 * hola,comentario hector
*/

session_start();

if( isset( $_SESSION['username'] )==true && isset( $_SESSION['token'] )){
   echo "<h1>Logeado!</h1>";
   header("Location:index1.php");
   die(); 
   //exit();
}
else{
    ?>
<!DOCTYPE html>
<html lang="es">



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>De quen Eres!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="PlantillaFront/assets/img/favicon.png" rel="icon">
  <link href="PlantillaFront/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="PlantillaFront/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="PlantillaFront/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="PlantillaFront/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="PlantillaFront/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Identificate</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Inicia sesion con tu cuenta</h5>
                    <p class="text-center small">Ingresa tu usuario y tu contraseña para iniciar</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nombre de Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" id="username" name="username" class="form-control" required>
                        <div class="invalid-feedback">Por Favor ingresa tu nombre de usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" id="password" name="password" class="form-control" required>
                      <div class="invalid-feedback">Por favor ingresa tu contraseña!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Mantenerme Conectado</label>
                      </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary w-100" type="submit" id="registrate">Identificarse</a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">No tienes una cuenta?<a href="pages-register.html">Crear una Cuenta</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>-->

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="PlantillaFront/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="PlantillaFront/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="PlantillaFront/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="PlantillaFront/assets/vendor/echarts/echarts.min.js"></script>
  <script src="PlantillaFront/assets/vendor/quill/quill.min.js"></script>
  <script src="PlantillaFront/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="PlantillaFront/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="PlantillaFront/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="PlantillaFront/assets/js/main.js"></script>
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
      $(function (){
          alert("Cargada");
     $('#registrate').click(function (e){
         e.preventDefault();
         var u=$('#username').val();
         var p=$('#password').val();
         var obj ={
             username:u,
             password:p
         };
          $.post('php/login.php',obj,function (resp){
            console.log(resp);
         });
         
     });
 });
  </script>
</body>

</html>
<?php
echo "No hay sesion ".$_SESSION['username'];
}
?>