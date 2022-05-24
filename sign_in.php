<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/script.js"></script>
  </head>
  <!----> 
  <body>
    <?php include_once 'menus.php';?>
        <!--recopilacion de datos del cliente--> 
    <form name="registro" action="validaciones.php">
      <h1>registrate</h1>
      <div class="label" id="nombre">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" required>
      </div>
      <div class="label" id="apellido">
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" required>
      </div>
      <div class="label" id="contraseña">
        <label for="contraseña">contraseña</label>
        <input type="password" name="contraseña" required>
      </div>
      <div class="label" id="doc">
        <p>tipo de documento</p>
        <input type="radio" id="Edni" name="tipoDoc" value="DNI">
        <label for="tipoDoc">DNI</label>
        <input type="radio" id="Epasaporte" name="tipoDoc" value="Pasaporte">
        <label for="tipoDoc">Pasaporte</label>
      </div>
      <div class="label" id="dni" >
        <input type="number" class="esconder" name="dni">
      </div>
      <div class="label" id="pasaporte">
        <input type="number" class="esconder" name="pasaporte">
      </div>
      <div class="label" id="mail">
        <label for="mail">correo</label>
        <input type="mail" name="mail">
      </div>
      <div class="label" id="provincia">
        <label for="provincia">provincia</label>
        <select name="provincia">
          <option name="buenosAires" value="buenosAires">Buenos Aires</option>
          <option name="CbuenosAires" value="CbuenosAires">Ciudad Autónoma de Buenos Aires</option>
          <option name="catamarca" value="catamarca">Catamarca</option>
          <option name="chaco" value="chaco">Chaco</option>
          <option name="chubut" value="chubut">Chubut</option>
          <option name="cordoba" value="cordoba">Córdoba</option>
          <option name="corrientes" value="corrientes">Corrientes</option>
          <option name="entreRios" value="entreRios">Entre Ríos</option>
          <option name="formosa" value="formosa">Formosa</option>
          <option name="jujuy" value="jujuy">Jujuy</option>
          <option name="pampa" value="pampa">La Pampa</option>
          <option name="rioja" value="rioja">La Rioja</option>
          <option name="mendoza" value="mendoza">Mendoza</option>
          <option name="misiones" value="misiones">Misiones</option>
          <option name="neuquen" value="neuquen">Neuquén</option>
          <option name="rioNegro" value="rioNegro">Río Negro</option>
          <option name="salta" value="salta">Salta</option>
          <option name="sanJuan" value="sanJuan">San Juan</option>
          <option name="sanLuis"> value="sanLuis">San Luis</option>
          <option name="santaCluz" value="santaCluz">Santa Cruz</option>
          <option name="santaFe" value="santaFe">Santa Fe</option>
          <option name="Santiago" value="Santiago">Santiago del Estero</option>
          <option name="Tierra del Fuego" value="Tierra del Fuego">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
          <option name="Tucumán" value="Tucumán">Tucumán</option>
        </select>
      </div>
      <div class="label" id="estudiante">
        <p>¿eres estidiante?</p>
        <input type="checkbox" name="estudiante" value="si">
        <label for="estudiante">Si</label><br>
        <input type="checkbox" name="estudiante" value="no">
        <label for="estudiante">No</label>
      </div>
      <div class="label" id="comentarios">
        <p>¿Para que quiere registrarse?</p>
        <textarea name="comentarios"></textarea>
      </div>
      <div id="enviar">
        <input type="submit" name="enviar" value="enviar">
      </div>
    </form>
  </body>
</html>