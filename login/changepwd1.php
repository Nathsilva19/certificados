<?php
    session_start();
    include '../inc/conexion.php';
    $link=conectar();
    $pass=$_REQUEST['pass_user'];
    $id_user=$_SESSION['id_usuario'];
    $sql= "UPDATE usuarios SET Contraseña = '$pass' WHERE id_usuario =$id_user";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
    echo "<script type='text/javascript'>
    alert('Usuario Actualizado con exito al sistema');
    window.location='../login/';
    </script>";
?>