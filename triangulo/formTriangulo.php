<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>ejercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/script.js"></script>
  </head>
  <body>
    <?php include_once 'menus.php';?>
    <form action="triangulo2.php" method="get">
      <h1>triangulo</h1>
      <p>Ingrese el valor de los 3 ángulos:</p>
      <div class="label">
        <label for="angulo1">angulo 1</label>
        <input id="angulo1" type="number" name="a1">
      </div>
      <div class="label">
        <label for="angulo2">angulo 2</label>
        <input id="angulo2" type="number" name="a2">
      </div>
      <div class="label">
        <label for="angulo3">angulo 3</label>
        <input id="angulo3" type="number" name="a3">
      </div>
      <input type="submit" value="Calcular">
    </form>
  </body>
</html>