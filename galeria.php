<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catalogo - Fenix</title>
    <link rel="shortcut icon" href="img/icoF.png" />
    
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link href="css/gallery-grid.css" rel="stylesheet" type="text/css"/>
    <link href="css/creativeGaleria.css" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#337ab7">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top">Amoblamientos Fenix</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html#about">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Servicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="galeria.php">Catalogo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<div class="container">
<div class="center">
    <h1 class="display-3 center-block">Catálogo de Muebles</h1> 
</div>
    <!--<p class="page-description text-center">Grid Layout With Zoom Effect</p>-->
    <?php
$directorio = 'img/galeria2';

$images = array_diff(scandir($directorio), array('..', '.'));
?>
    <div class="tz-gallery">
        
        <div class="row">
             <?php
            foreach ($images as $image){
                if($image!="." || $image!=".."){
                    ?>   
                 <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria2/<?php echo $image?>">
                    <img src="img/galeria2/<?php echo $image?>" alt="Park">
                </a>
            </div>
                    
                   <?php 
                }
            }
            
            ?>
            
            
            
            
<!--            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria2/18.png">
                    <img src="img/galeria2/18.png" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/bridge.jpg">
                    <img src="img/galeria/bridge.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/galeria/tunnel.jpg">
                    <img src="img/galeria/tunnel.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/coast.jpg">
                    <img src="img/galeria/coast.jpg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/rails.jpg">
                    <img src="img/galeria/rails.jpg" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/traffic.jpg">
                    <img src="img/galeria/traffic.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/rocks.jpg">
                    <img src="img/galeria/rocks.jpg" alt="Rocks">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/benches.jpg">
                    <img src="img/galeria/benches.jpg" alt="Benches">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/galeria/sky.jpg">
                    <img src="img/galeria/sky.jpg" alt="Sky">
                </a>
            </div>-->
        </div>

    </div>

</div>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>-->
<script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/creative.js" type="text/javascript"></script>
</body>
</html>