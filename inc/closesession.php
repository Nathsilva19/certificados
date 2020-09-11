<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>
    alert('Cerramos su session al sistema');
    window.location='../login/';
    </script>";
?>
