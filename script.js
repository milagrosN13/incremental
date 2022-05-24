/*index*/
// mostrar opcion segun tipoDoc
function mostrar(id){
    id.classList.remove("esconder");
    id.classList.add("mostrar");
}
if (/*cual de las 2 opciones se eligio mediante el check*/1){
    /*muetra div id=dni*/
    mostrar(document.getElementById("dni"))
} else{
    /*muetra div id=pasaporte*/
    mostrar(document.getElementById("pasaporte"))
}

/*log_in*/
/*sign_in*/