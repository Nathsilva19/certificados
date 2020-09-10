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
    main .container .lead-text {
        margin: 0px;
        padding-bottom: 40px;
    }
    main .container .lead-text h1 {
        font-size: 42px;
        text-align: center;
    }
    main .container .form-box{
        width: 50%;
        border: 1px solid #dfe1e5;
        margin: 0px;
        box-shadow: 1px 1px 1px 1px rgba(23, 24, 24, 0.699);
        border-radius: 10px;
        padding: 30px;
        background-color: rgba(237, 240, 245, 0.4);
        text-align: center;
    }
    main .container .form-box p{
        font-size: 14px;
        margin-bottom: 0;
        text-align:center;
    }
    main .container .form-box input{
        width: 100%;
        border-radius: 10px;
        height: 30px;
        border: 1px solid #dfe1e5;
        font-size: 14px;
        padding-left: 5px;
        text-align: center;
    }
    main .container .form-box input:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.404);
        border-color: #dfe1e500 ;
    }
    main .container .form-box input:focus{
        outline: none;
    }
    main .container .form-box select{
        width: 100%;
        border-radius: 10px;
        height: 30px;
        border: 1px solid #dfe1e5;
        font-size: 14px;
        padding-left: 5px;
        text-align: center;
    }
    main .container .form-box select:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.404);
        border-color: #dfe1e500 ;
    }
    main .container .form-box select:focus{
        outline: none;
    }
    main .container .form-box button{
        width: 200px;
        height: 43px;
        border: 1px solid #dfe1e5;
        background-color: rgb(23, 146, 164);
        border-radius: 10px;
        color: white;
        font-size: 1rem;
        margin: 20px;
    }
    main .container .form-box button:hover{
        box-shadow: 2px 3px 6px 2px rgba(23, 24, 24, 0.699);
        border-color: rgba(23, 146, 164, 1);
    }
    main .container .form-box button:focus{
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
    }
</style>

<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <img src="../img/logo.png" alt="logo" width="300">
                <p><?php session_start(); echo $_SESSION['nombre'];?></p>
            </div>
        </div>
        </div>
    </header>
    <section class="main-background">

        <main>
            <div class="container">
                <div class="lead-text">
                    <h1>A continuacion se encuentra el formulario para crear usuarios.</h1>
                </div>
                <div class="form-box">
                    <form action="createuserb.php" method="post">
                        <h2>Crea usuario</h2>
                        <p>Identificacion medico</p>
                        <input type="text" name="id_user" placeholder="Ingresa identificación" required>
                        <p>Nombre completo medico</p>
                        <input type="text" name="nom_user" placeholder="Ingresa nombre del medico" required>
                        <p>Correo electronico</p>
                        <input type="text" name="email_user" placeholder="Ingresa correo electronico" required>
                        <p>Rol</p>
                        <select name="rol_user" required />
                            <option selected>Seleccionar</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Medico">Medico</option>
                        </select>
                        <br>
                        <button type="submit">Crear usuario</button>
                    </form>
                </div>
            </div>
        </main>
    </section>
    <footer>

    </footer>
</body>

</html>