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
        <label for="nombre_usuario">nombre de usuario</label>
        <input type="text" name="nombre-usuario">
      </div>
      <div class="label">
        <label for="contraseña">contraseña</label>
        <input type="password" name="contraseña">
      </div>
      <div class="label">
        <input type="submit" value="entrar">
      </div>
    </form>


  </body>
</html>