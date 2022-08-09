/*index*/

/*log_in*/

/*sign_in*/
// mostrar opcion segun tipoDoc
// si la id es dni hacer un text con el name="dni" si no con name="pasaporte"
function tipoDoc() {
    var Valor_tipo = document.getElementById('tipoDoc').nodeValue;
    if (Valor_tipo == "DNI") {
        document.getElementById('DNI').hidden = false;
    }
    if (Valor_tipo == "pasaporte") {
        document.getElementById('pasaporte').hidden = false;
    }
}
