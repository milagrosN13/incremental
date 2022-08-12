function confirmarDatos(){
    form = document.getElementsByName("nombre");
    if (form.value == null){
        return "esta vacio";
    }
}
form = document.getElementsByName("nombre").value;
regresa = form.addEventListener("change", confirmarDatos);
alert(regresa)