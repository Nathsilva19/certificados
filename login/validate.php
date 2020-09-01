<?php
    session_start();
    include '../inc/conexion.php';
    $link=conectar();
    $email=$_REQUEST['mail_user'];
    $pass=$_REQUEST['pass-user'];
    $sql = "SELECT * FROM usuarios where Correo = '$email' and Contraseña = '$pass'";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

    if($r=mysqli_fetch_array($result)){

        $_SESSION['correo']=$r['Correo'];
        $_SESSION['nombre']=$r['Nombre'];
        $_SESSION['contraseña']=$r['Contraseña'];
        $_SESSION['rol']=$r['rol'];
        $_SESSION['id_usuario']=$r['id_usuario'];

    if ($_SESSION['contraseña'] == "default_password") {
    echo "<script type='text/javascript'>
    alert('Bienvenido(a) ".$_SESSION['rol']." ".$_SESSION['nombre']." al sistema');
    window.location='../login/changepwd.php';
    </script>";

    }elseif($_SESSION['contraseña'] != "default_password" && $_SESSION['rol']=='Medico') {
    echo "<script type='text/javascript'>
        alert('Bienvenido(a) ".$_SESSION['rol']." ".$_SESSION['nombre']." al sistema');
    window.location='../modules/load-files.php';
    </script>";
    }elseif($_SESSION['contraseña'] != "default_password" && $_SESSION["rol"]=='Administrador'){
    echo "<script type='text/javascript'>
    alert('Bienvenido(a) ".$_SESSION['rol']." ".$_SESSION['nombre']." al sistema');
    window.location='../login/indexad.php';
    </script>";
    }
    }else{
        echo "<script type='text/javascript'>
        alert('El usuario o el pass ingresados no conciden');
        window.location='../login/';
        </script>";
    }


?>