<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once "plantillas/head.php" ; ?>
    <title>registrarse</title>
  </head>
  <body>
    <?php require_once "plantillas/menus.php" ; ?>
    <!--recopilacion de datos del cliente--> 
    <form name="registro" action="">
      <h1>registrate</h1>
      <div class="label" id="nombre">
        nombre
        <input type="text" name="nombre" required>
      </div>
      <div class="label" id="apellido">
        apellido
        <input type="text" name="apellido" required>
      </div>
      <div class="label" id="nombre-usuario">
        nombre de usuario
        <input type="text" name="nombre-usuario" required>
      </div>
      <div class="label" id="contraseña">
        contraseña
        <input type="password" name="contraseña" required>
      </div>
      <div class="label" id="mail">
        correo
        <input type="mail" name="mail">
      </div>
      <div class="label" id="enviar">
        <input type="submit" name="enviar" value="enviar">
      </div>
    </form>
  </body>
</html>