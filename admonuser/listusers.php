<?php
session_start();
    include '../inc/conexion.php';
    $link=conectar();
    $sql = "SELECT * FROM usuarios";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>COMPENSALUD IPS</title>
    <link rel="shortcut icon" href="../img/FLATICON SALUD.PNG" type="image/x-icon">
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
    .btn-update{
        background-color: rgba(23, 146, 164, 1);
    }
    .btn-update:hover{
        background-color: rgb(20, 178, 202);
    }
    .btn-delete{
        background-color: rgb(164, 23, 46);
    }
    .btn-delete:hover{
        background-color: rgb(248, 0, 41);
    }
    .create-button{
        margin:30px;
        background-color: rgba(23, 146, 164, 1);
        padding:8px;
        border-radius: 10px;
    }
    .create-button a{
        text-decoration: none;
        color: white;
    }
    .create-button:hover{
        background-color: rgb(20, 178, 202);
    }
    header .container .header-logo{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    header .container .header-logo p{
        font-weight: 600;
        font-size: 1.2em;
        color: white;
    }
</style>
<body>
    <header>
        <div class="container">
        <div class="header-logo">
                <img src="../img/logo.png" alt="logo" width="300">
                <p><?php echo $_SESSION['nombre'];?></p>
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
                            <th>Nombre Doctor</th>
                            <th>Correo</th>
                            <th>Identificacion Doctor</th>
                            <th>Descarga</th>
                        </tr>
                    </thead>
                    <?php  while($r=$result->fetch_array()){?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $r["Nombre"] ?>
                                </td>
                                <td>
                                    <?php echo $r["Correo"] ?>
                                </td>
                                <td>
                                    <?php echo $r["Identificacion"] ?>
                                </td>
                                <td>
                                    <a class="btn-update" href="updateuserf.php?id_usuario=<?php echo $r["id_usuario"];?>">Actualizar</a>
                                    <a class="btn-delete" href="deleteuserf.php?id_usuario=<?php echo $r["id_usuario"];?>">Borrar</a>
                                    <a class="btn-update" href="lost_password.php?id_usuario=<?php echo $r["id_usuario"];?>">Reset Password</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </table>
            <?php } ?>
                <div class="create-button">
                    <a href="createuserf.php">Crear usuario nuevo</a> 
                </div>
            </div>
        </main>
    </section>
    <footer>

    </footer>
</body>

</html>