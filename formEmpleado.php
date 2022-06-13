<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Empleados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/script.js"></script>
</head>
<body>
    <?php include_once "./assets/menus.php" ; ?>
    <h1>Datos del empleado</h1>
    <form id="f" action="./empleados/verDatos.php" method="post">
        <label for="nombre">Nombre:</label>
        <input name="nombre" value="Fulano"><br>

        <label for="apellido">Apellido:</label>
        <input name="apellido" value="de Tal"><br>

        <label for="salario">Salario:</label>
        <input type="number" name="salario" value="10000"><br>
    
        <label for="dni">DNI:</label>
        <input type="number" name="dni" value="30123456"><br>

        <label for="tipo">Situación:</label>
        <select name="tipo" onchange="cambioTipo(this.value)">
            <option value="s">Seleccione</option>
            <option value="e">Eventual</option>
            <option value="p">Permanente</option>
        </select>
        <div id="segunTipo"></div>
        <input name="submit" type="submit" value="Ver Datos" disabled>
    </form>
    <script>
    function cambioTipo(tipo) {
        var f = document.getElementById("f");
        var mostrar = document.getElementById("segunTipo");
    
        while( mostrar.firstChild ) {
            mostrar.removeChild(mostrar.firstChild);
        }

        if(tipo == "e") {
            var i;
            var l = document.createElement("label");
            l.setAttribute("for","cantVentas");
            l.innerHTML = "Cantidad de ventas";
            var e = document.createElement("input");
            e.type = "number";
            e.name = "cantVentas";
            e.onchange = function() {             
                while ( d.firstChild ) {
                    d.removeChild(d.firstChild);
                }
                for (var j = 0;  j < e.value; j++) {
                    i = document.createElement("input");
                    i.type = "number";
                    i.name = "ventas["+j+"]";
                    d.appendChild(i);
                }
            };
            var d = document.createElement("div");
            d.setAttribute("id","montos");
            mostrar.appendChild(l);
            mostrar.appendChild(e);            
            mostrar.appendChild(d);
            f.submit.disabled=false; 
        }
    
        else if(tipo =="p") {
            var l = document.createElement("label");
            l.for = "fechaIngreso";
            l.innerHTML = "Fecha de ingreso";
        
            var i = document.createElement("input");
            i.type = "date";
            i.name = "fechaIngreso";
        
            mostrar.appendChild(l);
            mostrar.appendChild(i);
            f.submit.disabled=false;        
        }    
        else {
            f.submit.disabled=true;
        }
    }
    </script>
</body>
</html>
