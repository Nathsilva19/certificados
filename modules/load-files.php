<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="main-input">
            <form action="subearchivo.php" method="post" enctype="multipart/form-data">
                <div class="load-button">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    <input name="userfile" type="file">
                </div>
                <div class="search-button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
    
</body>

</html>