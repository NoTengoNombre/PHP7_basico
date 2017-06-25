<!--
    @Created on : 25-jun-2017, 23:16:23
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<div>
 <p>Enviar color </p>
 <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <!--<input type="color" name="color" value="#ff0000">-->
  <input type="color" name="color" value="">
  <input type="submit" value="Enviar">
 </form>
</div>

<?php
if (!isset($_GET['color'])) {
    echo 'Valor no fijado';
} else {
    $valor = $_GET['color'];
    if (empty($valor) == false) {
        if ($valor == '#ff0000') {
            echo 'Soy rojo <br>' . $valor . '<br>';
        } else {
            echo '<br>Otro color - ' . $valor . '<br>';
        }
    } else {
        echo "Sin color";
    }
}
?>
