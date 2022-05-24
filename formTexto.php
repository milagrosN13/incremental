<!DOCTYPE html>
<html lang="es-ar">
<head>
  <meta charset="utf-8">
    <title>texto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/script.js"></script>
</head>
<body>
  <?php include_once "./assets/menus.php" ; ?>
    <form action="texto.php" method="get">
      <h1>cuantas vocales y cuantas consonantes</h1>
      <p>Ingrese un texto</p>
      <div class="label">
        <input type="text" name="texto">
      </div>
      <div class="label">
        <input type="submit" value="Calcular">
      </div>
    </form>
</body>
</html>
