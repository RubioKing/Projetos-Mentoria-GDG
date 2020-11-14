<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto GDG</title>
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Start Bootstrap
            </a>
        </li>
        <li>
            <a href="#">Cadastrar produtos</a>
        </li>
        <li>
            <a href="#">Listar produtos</a>
        </li>
        <li>
            <a href="#">Mapa de vendas</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container2"></div>
                </figure>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container3"></div>
                </figure>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container4"></div>
                </figure>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
    <script type="text/javascript" src="jQuery.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="graficos.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
  </script>
</body>
</html>