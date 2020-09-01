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
</style>
<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <img src="./img/m.jpg" alt="logo">
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
                            <button>admon user</button>
                        </div>
                    </div>
                    <div class="main-box-right">
                        <div class="box-rigth-title">
                            <h2>Sube el certificado</h2>
                        </div>
                        <div class="box-right-content">
                            <ul>
                                <li>Sube los archivos</li>
                            </ul>
                            <button>load-file</button>
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