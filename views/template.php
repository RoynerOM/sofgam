<?php
session_start();
$index = new TemplateController();
/*=============================================
Capturar las rutas de la URL
=============================================*/
$routesArray = explode("?", $_SERVER['REQUEST_URI'])[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOFGAM</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="views/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="views/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Material Preloader -->
  <link rel="stylesheet" href="views/assets/plugins/material-preloader/material-preloader.css">
  <!-- Notie Alert -->
  <link rel="stylesheet" href="views/assets/plugins/notie/notie.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" type="text/css" href="views/assets/custom/template/template.css?v=1">

  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="views/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- Select2 -->
  <script src="views/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- Material Preloader -->
  <!-- https://www.jqueryscript.net/loading/Google-Inbox-Style-Linear-Preloader-Plugin-with-jQuery-CSS3.html -->
  <script src="views/assets/plugins/material-preloader/material-preloader.js"></script>
  <!-- Notie Alert -->
  <!-- https://jaredreich.com/notie/ -->
  <!-- https://github.com/jaredreich/notie -->
  <script src="views/assets/plugins/notie/notie.min.js"></script>
  <!-- Sweet Alert -->
  <!-- https://sweetalert2.github.io/ -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <?php if (!empty($routesArray)) : ?>
    <?php if (
      $routesArray == "/admins"
      || $routesArray == "/users"
      || $routesArray == "/realizada"
      || $routesArray == "/adaptacion"
      || $routesArray == "/labor_seguimiento"
      || $routesArray == "/educacion_externa"
      || $routesArray == "/ahorro_consumo_combustible"
      || $routesArray == "/consumo_combustible"
      || $routesArray == "/educacion_ambiental"
      || $routesArray == "/inventario_vehiculo"
      || $routesArray == "/sistemas_tratamientos"
      || $routesArray == "/ahorro_consumo_agua"
      || $routesArray == "/consumo_combustible"
      || $routesArray == "/consumo_agua_potable"
      || $routesArray == "/sustitucion_producto"
      || $routesArray == "/ahorro_consumo_electricidad"
      || $routesArray == "/consumo_mensual_electricidad"
      || $routesArray == "/mantenimiento_equipo_refrigeracion" // problemas con eliminar
      || $routesArray == "/gestion_ambiental" // no existe tabla en la base de datos para realizar este modulo
      || $routesArray == "/producto_contaminante_atmosferico" // problemas con editar y eliminar
      || $routesArray == "/residuos"
      || $routesArray == "/reduccion_de_consumo"
      || $routesArray == "/reduccion_de_residuos" // problemas con editar y eliminar
      || $routesArray == "/aumento_de_generacion_residuos"
    ) : ?>
      <!-- DataTables  & Plugins -->
      <link rel="stylesheet" href="views/assets/plugins/daterangepicker/daterangepicker.css?v=1">
      <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css?v=1">
      <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css?v=1">
      <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css?v=1">

      <script src="views/assets/plugins/moment/moment.min.js"></script>
      <script src="views/assets/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="views/assets/plugins/jszip/jszip.min.js"></script>
      <script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
      <script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
      <script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <?php endif ?>
  <?php endif ?>
 
  <script src="views/assets/custom/alertas/alertas.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php
  if (!isset($_SESSION["admin"])) {
    include("views/pages/login/index.php");
    echo '</body></head>';
    return;
  }
  ?>
  <?php if (isset($_SESSION["admin"])) : ?>
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <?php include("views/modules/navbar.php"); ?>
      <!-- Main Sidebar Container -->
      <?php include("views/modules/sidebar.php"); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php
        if (!empty($routesArray)) {
          $index->returnView($routesArray);
        } else {
          $index->returnView();
        }
        ?>
        <!-- Content Header (Page header) -->
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include("views/modules/footer.php"); ?>
    </div>
    <!-- ./wrapper -->
  <?php endif ?>

  <script src="views/assets/custom/formularios/formularios.js"></script>
</body>

</html>