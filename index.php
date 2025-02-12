<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css"/>
  <title>A.A.M.R   </title>
  <title>¿Quieres ser mi novia?</title>
</head>

<body>
  <div class="background-overlay"></div>
  <div class="rosa">
    <div class="contenedor">
      <br />
      <img src="./img/inicio.gif" class="imagen imagen-gif" id="imagen">
 
      <h1 id="mensaje">¿Quieres ser mi novia?</h1>
      <button class="boton" id="btnSi">Sí</button>
      <button class="boton" id="btnNo">No</button>
    </div>
  </div>

  <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script language="javascript" type="text/javascript" src="./js/main.js"> </script>

  <?php
  /*ruta:esta en  la carpeta  artezanias_pinzon*/ 

$archivo = "archivo.txt";
$contador = intval(trim(file_get_contents($archivo)));

$file = fopen($archivo, "w");
fwrite($file, $contador+1 . PHP_EOL);

$file = fopen($archivo, "r");
echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #ff5a19;padding: 2px 10px;color: #fff;font-size: 30px;border-radius: 20px;">'. 
fgets($file). '</div>' ;
fclose($file);   
?>


</body>

</html>
