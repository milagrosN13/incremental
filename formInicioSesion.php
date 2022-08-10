<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once "plantillas/head.php" ; ?>
    <title>inicio de sesion</title>
  </head>
  <body>
    <?php require_once "plantillas/menus.php" ; ?>
    <form action="" method="get">
      <h1>inicio sesion</h1>
      <div class="label">
        nombre de usuario<br>
        <input type="text" name="nombre-usuario">
      </div>
      <div class="label">
        contraseña<br>
        <input type="password" name="contraseña">
      </div>
      <div class="label">
        <br>
        <input type="submit" value="entrar">
      </div>
      <br>
      <button class="btn"><a href="\incremental\formRegistro.php">registrarse</a></button>
    </form>


  </body>
</html>