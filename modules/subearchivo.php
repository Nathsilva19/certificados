<?php
session_start();
$id_paciente= $_REQUEST['id_user'];
$nombre_paciente=$_REQUEST['name-user'];
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
$uploads_dir = "../uploads/" . $nombre_archivo;
$id_user_up=$_SESSION['id_usuario'];
include '../inc/conexion.php';
$link=conectar();

if (!((strpos($tipo_archivo, "pdf")) && ($tamano_archivo < 100000))) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>No se permiten archivos .gif o .jpg<br><li>Se permiten archivos PDF de 100 Kb máximo.</td></tr></table>";
}else{
    copy($_FILES['userfile']['tmp_name'] ,  $uploads_dir);
    $sql= "INSERT INTO `load_files`(`identificacion_paciente`, `nombre_paciente`, `ruta_pdf`, `usuarios_id_usuario`) VALUES ('$id_paciente', '$nombre_paciente', '$uploads_dir', '$id_user_up')";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
    echo "<script type='text/javascript'>
    alert('Archivo ingresado con exito al sistema');
    window.location='../modules/load-files.php';
    </script>";
}
?>
