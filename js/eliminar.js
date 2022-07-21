function confirmarElim() {
    var resultado = window.confirm('¿Estas seguro?');

    if (resultado === true) {
        window.alert('Cuenta eliminada.');
    } else { 
    window.alert('Se conservan la cuenta.');
    }
}
// alerta de error
function alertaError() {
    swal("Oops!", "Something went wrong on the page!", "error");
    //  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
}

