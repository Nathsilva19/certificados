<?php
    session_start();
    include '../inc/conexion.php';
    $link=conectar();
    $id_user=$_GET['id_usuario'];
    $pwd="default_password";
    $sql= "UPDATE  usuarios set `Contraseña`= '$pwd' WHERE id_usuario=$id_user";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

    echo "<script type='text/javascript'>
    alert('Contraseña reinciada con exito del sistema = $pwd');
    window.location='../admonuser/listusers.php';
    </script>";
?>