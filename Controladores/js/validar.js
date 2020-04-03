function validarFomulario() {

    if (document.myform.nombre.value == "") {
        alert("Por favor ingrese su nombre");
        document.myform.nomb.focus();
        return false;
    }
    valor = document.getElementById("ced").value;
    if (isNaN(valor)) {
        alert('ingrese su cedula con un valor numerico');
        valor.focus();
        return false;
    }
    valor2 = document.getElementById("tel").value;
    if (isNaN(valor)) {
        alert('ingrese su telefono con solo  valores numericos');
        valor2.focus();
        return false;
    }
    if (document.myform.fecha_nacimiento.value == "") {
        alert("Por favor ingrese su fecha de nacimiento");
        document.myform.fecha_nacimiento.focus();
        return false;
    }

}