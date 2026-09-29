function mostrarAlerta() {
    var respuesta = confirm("¿Deseas agregar un nuevo registro?");

    if (respuesta == true) {
        window.location.href = "index.php";
    }
}
