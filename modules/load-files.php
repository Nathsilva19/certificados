<?php
session_start();
if ($_SESSION) { ?>
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
    main .container .lead-text{
        margin-top: 0px;
        margin-bottom: 20px;
    }
    main .container .lead-box{
        display: flex;
        justify-content: space-between;
        margin: auto;
    }
    main .container .lead-box .main-box-left{
        width: 50%;
        margin: 30px;
        padding: 30px;
        text-align: center;
    }
    main .container .lead-box .main-box-left li{
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }
    main .container .lead-box .main-box-right{
        width: 50%;
        border: 1px solid #dfe1e5;
        margin: 30px;
        box-shadow: 1px 1px 1px 1px rgba(23, 24, 24, 0.699);
        border-radius: 10px;
        padding: 30px;
        background-color: rgba(237, 240, 245, 0.4);
        text-align: center;
    }
    main .container .lead-box .main-box-right .box-right-content p{
        font-size: 14px;
        margin-bottom: 0;
        text-align:center;
    }
    main .container .lead-box .main-box-right .box-right-content input{
        width: 100%;
        border-radius: 10px;
        height: 30px;
        border: 1px solid #dfe1e5;
        font-size: 14px;
        padding-left: 5px;
        text-align: center;
    }
    main .container .lead-box .main-box-right .box-right-content input:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.404);
        border-color: #dfe1e500 ;
    }
    main .container .lead-box .main-box-right .box-right-content input:focus{
        outline: none;
    }
    main .container .lead-box .main-box-right .box-right-content input::placeholder{
        color: rgba(128, 131, 129, 0.4);
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load{
        display: flex;
        justify-content: space-between;
        align-content: center;
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load input{
        border: none;
        align-self: center;
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load input:hover{
        box-shadow: none;
        border-color: none ;
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load button{
        width: 100px;
        height: 43px;
        border: 1px solid #dfe1e5;
        background-color: rgb(23, 146, 164);
        border-radius: 10px;
        color: white;
        font-size: 1rem;
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load button:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.699);
        border-color: rgba(23, 146, 164, 1);
    }
    main .container .lead-box .main-box-right .box-right-content .box-file-load button:focus{
        outline: none;
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
        padding-right: 30px;
    }
    header .container .header-logo .headers-buttons{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    header .container .header-logo .headers-buttons button{
        width: 150px;
        height: 50px;
        border: 1px solid black;
        background-color: rgba(23, 146, 164, 1);
        border-radius: 10px;
        color: white;
        font-size: 1.1rem;
        box-shadow: 2px 3px 6px 2px #20212447;
        border-color: rgba(23, 146, 164, 1);
    }
    header .container .header-logo .headers-buttons button:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.699);
        border-color: rgba(23, 146, 164, 1);
    }
    header .container .header-logo .headers-buttons button:focus{
        outline: none;
    }
</style>
<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <?php
                if ($_SESSION['rol']== "Administrador"){
                ?>
                <a href="../login/indexad.php">
                    <img src="../img/logo.png" alt="logo" width="300">
                </a>
                <?php 
                }elseif ($_SESSION['rol']=="Medico"){
                ?>
                <a href="./load-files.php">
                    <img src="../img/logo.png" alt="logo" width="300">
                </a>
                <?php 
                }
                ?>
                <div class="headers-buttons">
                    <p><?php echo $_SESSION['nombre'];?></p>
                    <button onclick="window.location.href='../inc/closesession.php'">Cerrar sesion</button>
                </div>
                
            </div>
        </div>
    </header>
    <section class="main-background">
        <main>
            <div class="container">
                <div class="lead-text">
                    <h1>Sube el certificado de tu paciente</h1>
                    <h5>Ingresa los datos de tu paciente y sube el certificado</h5>
                </div>
                <div class="lead-box">
                    <div class="main-box-left">
                        <div class="box-left-title">
                            <h2>Tutorial de como subir los certificados</h2>
                        </div>
                        <div class="box-left-content">
                            <ul>
                                <li>Ingresa los datos de identificación y nombre del paciente</li>
                                <li>Da clic en el boton de elegir archivo y selecciona el certificado del usuario <strong>Recuerda que solo se puede cargar archivos de tipo PFD y no mayores en peso a 100kb.</strong></li>
                                <li>Finalmente da clic en el boton enviar que se encuentra en el formulario</li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-box-right">
                        <div class="box-rigth-title">
                            <h2>Sube el certificado</h2>
                            <p>Ingresa el numero de identificación y nombre del paciente a quien pertenece el certificado <strong>Recuerda que solo se pueden subir archivos PFD y de maximo 100kb.</strong></p>
                        </div>
                        <div class="box-right-content">
                            <form action="subearchivo.php" method="post" enctype="multipart/form-data">
                                <p>Identificacion usuario</p>
                                <input type="text" name="id_user" placeholder="Ingresa numero de identificación" required>
                                <p>Nombre del usuario</p>
                                <input type="text" name="name-user" placeholder="Ingresa el nombre del paciente" required>
                                <p>Archivo</p>
                                <div class="box-file-load">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                    <input name="userfile" type="file">
                                    <br>
                                    <button type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <footer>

    </footer>
</body>

</html>
<?php
}
else {
	echo "<script type='text/javascript'>
		alert('Ud no ha iniciado sesion. Por favor iniciar una sesion');
		window.location='../login/';
	</script>";
} ?>