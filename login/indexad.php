<?php
session_start();
if ($_SESSION) { ?>
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
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin: auto;
    }
    main .container .lead-box .main-box-left{
        width: 100%;
        margin: 30px;
        padding: 30px;
        text-align: center;
    }
    main .container .lead-box .main-box-left li{
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }
    main .container .lead-box .main-box-left .box-left-content button{
        width: 200px;
        height: 43px;
        border: 1px solid #dfe1e5;
        background-color: rgb(23, 146, 164);
        border-radius: 10px;
        color: white;
        font-size: 1rem;
    }
    main .container .lead-box .main-box-left .box-left-content button:hover{
        background-color: rgba(23, 146, 164,0.9);
    }
    main .container .lead-box .main-box-left .box-left-content button:focus{
        outline: none;
    }
    main .container .lead-box .main-box-right{
        width: 100%;
        border: 1px solid #dfe1e5;
        margin: 30px;
        box-shadow: 1px 1px 1px 1px rgba(23, 24, 24, 0.699);
        border-radius: 10px;
        padding: 30px;
        background-color: rgba(237, 240, 245, 0.4);
        text-align: center;
    }
    main .container .lead-box .main-box-right .box-right-content ul li{
        margin: 5% auto;
    }
    main .container .lead-box .main-box-right .box-right-content button{
        margin: 5% auto;width: 200px;
        height: 43px;
        border: 1px solid #dfe1e5;
        background-color: rgb(23, 146, 164);
        border-radius: 10px;
        color: white;
        font-size: 1rem;
    }
    main .container .lead-box .main-box-right .box-right-content button:hover{
        background-color: rgba(23, 146, 164,0.9);
    }
    main .container .lead-box .main-box-right .box-right-content button:hover{
        background-color: rgba(23, 146, 164,0.9);
    }
    main .container .lead-box .main-box-right .box-right-content button:focus{
        outline: none;
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
                    <h1>Sube el certificado de tu paciente</h1>
                    <h5>Ingresa los datos de tu paciente y sube el certificado</h5>
                </div>
                <div class="lead-box">
                    <div class="main-box-left">
                        <div class="box-left-title">
                            <h2>Gestion de usuarios</h2>
                        </div>
                        <div class="box-left-content">
                            <ul>
                                <li>Crear usuarios</li>
                                <li>Actualizar</li>
                                <li>Eliminar</li>
                                <li>Consultar</li>
                            </ul>
                            <button onclick="window.location.href='../admonuser/listusers.php'">Administra tus usuarios.</button>
                        </div>
                    </div>
                    <div class="main-box-right">
                        <div class="box-rigth-title">
                            <h2>Sube el certificado</h2>
                        </div>
                        <div class="box-right-content">
                            <ul>
                                <li>Hola</li>
                                <li>Como</li>
                                <li>Estas</li>
                                <li>Heyyyy</li>
                            </ul>
                            <button onclick="window.location.href='../modules/load-files.php'">Carga tus certificados.</button>
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