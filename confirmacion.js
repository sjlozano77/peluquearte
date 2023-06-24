var namep = null;
var lastname = null;
var date = null;
var hour = null;

function Mayuscula(elemento){
  let texto = elemento.value;
  elemento.value = texto.toUpperCase();
}

function confirmar(){
namep = document.getElementsByName("nombre")[0].value;
lastname = document.getElementsByName("apellido")[0].value;
date = document.getElementsByName("calendario")[0].value;
hour = document.getElementsByName("ingrese-hora")[0].value;
    Swal.fire({
        title: 'CONFIRMAR TURNO',
        text: namep+ " " +lastname+ " TIENE TURNO EL DIA "+date+" A LAS "+hour+" HS ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'TURNO GUARDADO',
            'SE A CONFIRMADO EL TURNO PARA '+namep+" "+lastname,
            'success'
          )
        }
      })    
}
