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
                    ?>   
                 <div class="col-sm-6 col-md-4">
                <a class="lightbox">
                    <img id="<?php echo $image?>"  class="" src="img/galeria2/<?php echo $image?>" style="height: 250px" onclick="abrirModal(id)">
                </a>
            </div>
                   <?php 
                }         
            ?>
        </div>
    </div>
</div>

    
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
                                                                                                                                
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
    
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>-->
<script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/creative.js" type="text/javascript"></script>
<script src="js/galeria.js" type="text/javascript"></script>
</body>
</html>