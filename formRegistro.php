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
        <input type="text" name="nombre" value="giuliana" required>
      </div>
      <div class="label" id="apellido">
        apellido<br>
        <input type="text" name="apellido" value="bacchini" required>
      </div>
      <div class="label" id="nombre-usuario">
        nombre de usuario<br>
        <input type="text" name="nombre-usuario" value="milagros3"required>
      </div>
      <div class="label" id="contraseña">
        contraseña<br>
        <input type="password" name="contraseña" value="hola" required>
      </div>
      <div class="label" id="mail">
        correo<br>
        <input type="mail" name="mail" value="ejemplo@ejemplo.com" required>
      </div>
      <div class="label" id="enviar">
        <br>
        <input type="submit" name="enviar" value="enviar">
      </div>
    </form>
  </body>
</html>