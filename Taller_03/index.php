<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Bar Finder</title>
   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
      body
      {
        padding-top: 50px;
        padding-bottom: 20px;
      }
    </style>
    
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE0etdJVs1_khnpSHA3rDwycawjabSAaU&sensor=false">
    </script>
  </head>

  <body>
    <div class="map">
    <div id="map-canvas"></div>
    </div>

    <div class="container">
    <div class="row">

    <div class="col-6 col-sm-4 col-lg-4">
    <p>¿No sabes dónde ir de rumba? Búsca en el mapa qué bar se encuentra más cerca a tí...</p>
    </div>

    </div>

    <div class="col-6 col-sm-4 col-lg-4">
    <canvas id="droparea"  width="357px" height="293px">Por favor cambia de explorador</canvas>
    <img id="dropimage" src="img/1.png">
    <br><br><br><br><br><br><br>
    </div>

    </div>

    <li id="selector">

    <ul>
    <p class = "escoge"> Escoge pues: </p>
    </ul>

    <ul>
    <a class="beer" href="#" id="corona" draggable="true">
    <img id="coronaimg" class="beerimg" src="img/a.jpg">
    </a>
    </ul>
    <ul>
    <a class="beer" href="#" id="poker" draggable="true">
    <img id="pokerimg" class="beerimg" src="img/b.jpg">
    </a>
    </ul>
    </li>

    </div> <!-- /container --> 

    <footer>
    <p>&copy; Luis Felipe Cediel</p>
    </footer>

    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>       

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/dragdrop.js"></script> 

    <script src="js/main.js"></script>
  </body>
</html>