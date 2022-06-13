<?php
    require_once "claseTexto.php" ;
    //Guardamos el valor de los ángulos en 3 variables:
    $t=$_GET['texto'] ;
    
    $texto = new claseTexto($t) ;
    $listaCaracteres = $texto -> recorrerCadena() ;
    echo $listaCaracteres ;
