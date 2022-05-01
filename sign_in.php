<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>
  <!----> 
  <body>
    <nav class="nav nav-tabs">
      <a class="nav-link" href="index.php">Inicio</a>
      <a class="nav-link" href="sign_in.php">registrarse</a>
      <a class="nav-link" href="log_in.php">iniciar sesion</a>
    </nav>
    <article class="formRegistrar">
      <h1>registrate</h1>
        <!--recopilacion de datos del cliente--> 
      <form action="validaciones.php">
        <div id="nombre">
          <label for="nombre">nombre</label>
          <input type="text" name="nombre" required>
        </div>
        <div id="apellido">
          <label for="apellido">apellido</label>
          <input type="text" name="apellido" required>
        </div>
        <div id="contraseña">
          <label for="contraseña">contraseña</label>
          <input type="password" name="contraseña" required>
        </div>
        <div id="doc">
          <p>tipo de documento</p>
          <input type="radio" name="tipoDoc" value="DNI">
          <label for="tipoDoc">DNI</label>
          <input type="radio" name="tipoDoc" value="Pasaporte">
          <label for="">Pasaporte</label>
        </div>
          <!--<input type="number">-->
      
        <!--mostrar opcion segun tipoDoc-->
        <script>
        
        </script>
        <div id="mail">
          <label for="mail">correo</label>
          <input type="mail" name="mail">
        </div>
        <div id="provincia">
          <label for="provincia">provincia</label>
          <select name="provincia">
            <option value="buenosAires">Buenos Aires</option>
            <option value="CbuenosAires">Ciudad Autónoma de Buenos Aires</option>
            <option value="catamarca">Catamarca</option>
            <option value="chaco">Chaco</option>
            <option value="chubut">Chubut</option>
            <option value="cordoba">Córdoba</option>
            <option value="corrientes">Corrientes</option>
            <option value="entreRios">Entre Ríos</option>
            <option value="formosa">Formosa</option>
            <option value="jujuy">Jujuy</option>
            <option value="panpa">La Pampa</option>
            <option value="rioja">La Rioja</option>
            <option value="mendoza">Mendoza</option>
            <option value="misiones">Misiones</option>
            <option value="neuquen">Neuquén</option>
            <option value="rioNegro">Río Negro</option>
            <option value="salta">Salta</option>
            <option value="sanJuan">San Juan</option>
            <option value="sanLuis">San Luis</option>
            <option value="santaCluz">Santa Cruz</option>
            <option value="santaFe">Santa Fe</option>
            <option value="Santiago">Santiago del Estero</option>
            <option value="Tierra del Fuego">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
            <option value="Tucumán">Tucumán</option>
          </select>
        </div>
        <div id="estudiante">
          <p>¿eres estidiante?</p>
          <input type="checkbox" name="estudiante" value="si">
          <label for="estudiante">Si</label><br>
          <input type="checkbox" name="estudiante" value="no">
          <label for="estudiante">No</label>
        </div>
        <div id="comentarios">
          <p>¿Para que quiere registrarse?</p>
          <textarea name="comentarios"></textarea>
        </div>
        <div id="enviar">
          <input type="submit" name="enviar" value="enviar">
        </div>
      </form>
    </article>
  </body>
</html>