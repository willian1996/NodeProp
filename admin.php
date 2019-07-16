<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--css-->
    <link rel="stylesheet" href="css/sb-admin.css">
</head>
<body>
 
    <!-- GRAFICO DE LINHA-->
        <div class="card mb-3">
          <div class="card-header">

            Visitas nas ultimas 24 horas</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


    <!-- GRAFICO DE BARRAS -->
        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">

                Visitas na última semana</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
            <!-- GRAFICOS DE PIZZA-->
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">

                Pedidos por categorias</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
        </div>


    <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
<!--  <script src="js/sb-admin.min.js"></script>-->

  <!-- Demo scripts for this page-->
  <script src="js/chart-area-demo.js"></script>
  <script src="js/chart-bar-demo.js"></script>
  <script src="js/chart-pie-demo.js"></script>
</body>
</html>
