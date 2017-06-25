<!--
    @Created on : 25-jun-2017, 23:16:23
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
 <head>
  <title>Controles</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="">
  <style>
   div{
       position: relative;
       border: 1px solid red; 
       margin: 5px ; 
       padding: 5px;
       display: inline-block;
       width: 200px; 
       float: left;
       display: inline-block;        
   }
  </style>
 </head>
 <body>
  <div>
   <p>Obtener datos de la diana </p>
   <br>
   <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input id="info" type="image" alt="img1" src="formularios_image.svg">
   </form>
  </div>
  <?php
  if (!isset($_REQUEST['x']) && (!isset($_REQUEST['y']))) {
      echo 'Define los puntos';
  } else {
      echo '1º valor : ' . $_REQUEST['x'];
      echo '<br>';
      echo '2º valor : ' . $_REQUEST['y'];
      if ($_REQUEST['x'] == 60 && $_REQUEST['y'] == 60) {
          echo '<h1>Diana</h1>';
      }
  }
  ?>
 </body>
</html>
