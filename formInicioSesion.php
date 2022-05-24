<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>inicio de sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/script.js"></script>
  </head>
  <!----> 
  <body>
    <?php include_once "./assets/menus.php" ; ?>
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