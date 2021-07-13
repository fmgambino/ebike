Aqui se mostrarán las BICICLETAS Disponibles para Extraer
<?php
$url="http://www.google.com"; // url de la pagina que queremos obtener
$url_content = '';
$file = @fopen($url, 'r');
if($file){
  while(!feof($file)) {
    $url_content .= @fgets($file, 4096);
  }
  fclose ($file);
}
?>


<?php
$homepage = file_get_contents('https://micronoa.com/iot/site/allbikes.html');
echo $homepage;
?>
