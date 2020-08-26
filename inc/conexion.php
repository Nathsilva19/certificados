<?php
    function conectar(){
        $h='localhost';// servidor de MYSQL
        $u='root'; // Usuario de MYSQL
        $p=''; // password de la MYSQL
        $db_name='certificados';
        $link= mysqli_connect($h,$u,$p) or die ("Error al conectarse a la BD");
        mysqli_select_db($link,$db_name) or die ("ERROR al seleccionar la BD");
        return $link;
    }
?>