<?php
    include '../inc/conexion.php';
    $link=conectar();
    $id_user=$_GET['id_usuario'];
    $sql= "DELETE FROM `usuarios` WHERE id_usuario=$id_user";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
    echo "<script type='text/javascript'>
    alert('Usuario Borrado con exito del sistema');
    window.location='../admonuser/listusers.php';
    </script>";
?>