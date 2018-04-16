<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
echo "<script>";
echo "location.href='../index.html'";  
echo "</script>";   
echo "Esta pagina es solo para usuarios registrados.";
}
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
echo "<script>";
echo "location.href='../index.html'";  
echo "</script>";
}
?>

<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Browse-Kontrolle</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<BODY>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt="Progressus HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="Cliente.php">Inicio</a></li>
                    <li><a href="about_c.php">Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="sidebar-left_c.php">Servicios</a></li>
                            <li><a href="sidebar-right_c.php">Guia de contratacion</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="consumo.php">Consumo</a></li>
                    <li><a class="btn" href="cerrar.php">Cerrar Sesion</a></li>            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 

<header id="head" class="secondary"></header>

<?php
require_once("RandomClass.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valoresArray;
$timeArray;

//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valoresArray[$i]= $rawdata[$i][2];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][3];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $timeArray[$i] = $date->getTimestamp()*1000;
}

?>
<div id="contenedor"></div>

<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
       
        text: 'Consumo'


    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Valores',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});


</script>
<footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>(55)76999810<br>
                                <a href="mailto:#">browse-kontrolle@gmail.com</a><br>
                                <br>
                                AV. San Francisco no. 30 Col Los Heroes Mpio. Coacalco, 55712, estado de México.
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow me</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href="https://www.facebook.com/Administracion.De.Gas/?ref=settings" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">BROWSE-KONTROLLE</h3>
                        <div class="widget-body">
                            <p> La empresa BROWSE-KONTROLLE nos dedicamos a suminstrar gas en negocios como pastelerias, restaurantes, hoteles y casas habitacion.
                            La empresa se enfoca en dar un buen servicio de intalacion del gas, tomando en cuenta la seguridad del consumidor al igual que la segurid  de nuestros colaboradores. </p>
                            
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>   
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>

</BODY>

</html>