<?php
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
$uploads_dir = "../uploads/" . $nombre_archivo;

if (!((strpos($tipo_archivo, "pdf")) && ($tamano_archivo < 100000))) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>No se permiten archivos .gif o .jpg<br><li>Se permiten archivos PDF de 100 Kb máximo.</td></tr></table>";
}else{
    copy($_FILES['userfile']['tmp_name'] ,  $uploads_dir);
    // Acomodar para carga BBDD y retorno a loadfiles
}
?>
