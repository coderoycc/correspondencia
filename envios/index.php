<?php
// if (isset($_COOKIE['user_obj'])) {
//   $user = json_decode($_COOKIE['user_obj']);
// } else {
//   header('Location: ../auth/login.php');
//   die();
// } 

$user->idUsuario = 0;
$user->nombre = 'HOLA';
$user->alias = 'HOsssssLA';
$user->rol = 'ADMIN';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Lista envios</title>
  <link rel="stylesheet" href="../assets/datatables/datatables.bootstrap5.min.css">
  <link href="../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../assets/jquery/jqueryToast.min.css">
  <script src="../assets/fontawesome/fontawesome6.min.js"></script>
  <script src="../assets/jquery/jquery.js"></script>
  <script src="../assets/jquery/jqueryToast.min.js"></script>
</head>

<body>
  <?php include("../common/header.php"); ?>
  <div id="layoutSidenav"> <!-- contenedor -->
    <?php include("../common/sidebar.php"); ?>
    <div id="layoutSidenav_content">
      <main id="main_egresos">
        <div class="container-fluid px-4">
          <div class="mt-4">
            <h1>Proyectos Ingreso</h1>
          </div>
          <div class="buttons-head col-md-6 col-sm-12 mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_ingreso_nuevo" data-idproyecto="0"><i class="fa fa-plus"></i> Nuevo Proyecto </button>
            <a class="btn btn-primary" type="button" href="./nuevo.php"><i class="fa fa-solid fa-hand-holding-dollar"></i> Nuevo pago</a>
          </div>
          <div class="row" id="card-egresos">
            <div class="card shadow">
              <div class="card-header">
                <h4>
                  <i class="fa fa-table"></i> Lista de proyectos
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table style="width:100%" class="table table-hover" id="table_ingresos">
                    <thead>
                      <tr>
                        <th class="text-center">N° ID</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Monto Ref.</th>
                        <th class="text-center">Monto pagado</th>
                        <th class="text-center">Creado por</th>
                        <th class="text-center">Fecha creación</th>
                        <th class="text-center">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="t_body_ingresos">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div><!-- fin contenedor -->

  <?php include('./modals.php'); ?>
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../assets/datatables/datatables.jquery.min.js"></script>
  <script src="../assets/datatables/datatables.bootstrap5.min.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>