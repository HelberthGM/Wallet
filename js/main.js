function confirmarElim() {
      swal.fire({
        title: "Cuenta #123465",
        text: "¿Eliminar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
        allowOutsideClick: false
    }).then((result) => {
        if (result.isConfirmed) {
          swal.fire({
            html: `<h2>Cuenta eliminada</h2>
            <p>Cuenta con el nombre <strong>ejemplo</strong> a sido eliminada</p>
            <br>
            <a href="inicio.html" class="desdeSwal">Volver al inicio</a>
            `,
        });
        }
      })
}

function confirmGuard() {
  if (document.formulario.cuenta.value.length==0 && document.formulario.valor.value.length==0) {
    console.log('click en cuenta creada....');
  swal.fire({
    html: `<h1>Cuenta creada</h1>
    <p>Se ha eviado un correo de confirmación</p>
    <br>
    <a href="inicio.html">Ingresar</a>
    `,
    icon: "success"
});
this.submit();
  }else{
    console.log('Los datos del form no estan completos')
  } 
}