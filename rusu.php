<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="usu.css">
</head>
<body>
    <div class="wrapper">
        <form action="save.php" method="POST">
            <h2>Registrar</h2>
            <div class="input-group">
            <label for="nombre">Nombre</label>
                <input  type="text" class="form-control" id="nombre" name="nombre" >
            </div>
            <div class="input-group">
            <label for="nombre">correo</label>
                <input  type="email" class="form-control" id="correo" name="correo" >
            </div>
            <div class="input-group">
            <label for="nombre"> Contraseña</label>
                <input  type="password" class="form-control" id="contraseña" name="contrase" >
            </div>
                <a href="usu.php"> inicio de sesion</a>
            <button type="submit" class="btn">Registrar</button>
            
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>