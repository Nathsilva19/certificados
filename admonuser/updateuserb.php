<?php
    include '../inc/conexion.php';
    $link=conectar();
    $id_user=$_GET['id_usuario'];
    $nombre=$_REQUEST['nom_user'];
    $mail=$_REQUEST['email_user'];
    $identificacion=$_REQUEST['id_user'];
    $rol=$_REQUEST['rol_user'];
    $sql= "UPDATE usuarios SET Nombre='$nombre',Correo='$mail',Identificacion='$identificacion', rol='$rol' WHERE id_usuario =$id_user";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
    echo "<script type='text/javascript'>
    alert('Usuario Actualizado con exito al sistema');
    window.location='../admonuser/listusers.php';
    </script>";
?>