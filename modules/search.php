<?php
    include '../inc/conexion.php';
    $link=conectar();
    $busqueda = $_REQUEST['search-text'];
    $sql = "SELECT * FROM load_files, usuarios WHERE load_files.identificacion_paciente=$busqueda";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nombre de la marca</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 15px;
        text-align: left;
        border: 1px solid #ccc;
        text-align: center;
    }
    tbody tr:nth-child(odd) {
        background: #eee;
    }
    tbody tr td a{
        margin:10px;
        background-color: rgba(23, 146, 164, 1);
        padding:8px;
        border-radius: 10px;
        text-decoration: none;
        color: white;
    }
    tbody tr td a:hover{
        background-color: rgba(23, 146, 164, 1);
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.404);
        border-color: #dfe1e500 ;
    }
    main .container .lead-text h1{
        font-size: 42px;
        text-align:center;
    }
</style>
<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <img src="./img/m.jpg" alt="logo">
            </div>
        </div>
    </header>
    <section class="main-background">
    
        <main>
            <div class="container">
                <div class="lead-text">
                    <h1>A continuacion se encuentran los certificados disponibles a descargar.</h1>
                </div>
            <?php if($result->num_rows>0){?>
                <table>
                    <thead>
                        <tr>
                            <th>Identificacion paciente</th>
                            <th>Nombre del paciente</th>
                            <th>Nombre doctor</th>
                            <th>Descarga</th>
                        </tr>
                    </thead>
                    <?php  while($r=$result->fetch_array()){?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $r["identificacion_paciente"] ?>
                                </td>
                                <td>
                                    <?php echo $r["nombre_paciente"] ?>
                                </td>
                                <td>
                                    <?php echo $r["Nombre"] ?>
                                </td>
                                <td>
                                    <a href="<?php echo $r["ruta_pdf"] ?>">Descarga</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            <?php } ?>
            </div>
        </main>
    </section>
    <footer>

    </footer>
</body>

</html>