<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once "plantillas/head.php" ; ?>
    <title>registrarse</title>
  </head>
  <body>
    <form name="registro" action="">
      <h1>registrate</h1>
      <div class="label" id="nombre">
        nombre<br>
        <input type="text" name="nombre" required>
      </div>
      <div class="label" id="apellido">
        apellido<br>
        <input type="text" name="apellido" required>
      </div>
      <div class="label" id="nombre-usuario">
        nombre de usuario<br>
        <input type="text" name="nombre-usuario" required>
      </div>
      <div class="label" id="contraseña">
        contraseña<br>
        <input type="password" name="contraseña" required>
      </div>
      <div class="label" id="mail">
        correo<br>
        <input type="mail" name="mail">
      </div>
      <div class="label" id="enviar">
        <br>
        <input type="submit" name="enviar" value="enviar">
      </div>
    </form>
  </body>
</html>