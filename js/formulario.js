const form = document.querySelector('.form');
const DNI = document.getElementById('DNI');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const estado = document.getElementById('estado');
//const id_empleado = document.getElementById('id_empleado');
/*const dia = document.getElementById('dia');
const hora = document.getElementById('hora');*/
const dniMensaje= document.getElementById('dniMensaje');
const nombreMensaje= document.getElementById('nombreMensaje');
const apellidoMensaje= document.getElementById('apellidoMensaje');
const selectMensaje = document.getElementById('selectMensaje');
//const reservar = document.getElementById('reservar');

//EL CRI
const opcionAlert = document.querySelector('.opcionAlert'); 
const stars = document.querySelectorAll('.star');
const formulario = document.querySelector('form');

//VARIABLES
let error_consulta_comun_1 = "Ya existe ese " + formulario.id.toLowerCase() + " en nuestra base de datos";
let error_consulta_comun_2 = "Reintente otra vez.";
let error_clave_duplicada = error_consulta_comun_1   + " con ese DNI. " + error_consulta_comun_2 ;
let error_user_duplicado = error_consulta_comun_1   +  " con ese nombre de usuario. " + error_consulta_comun_2;

let eror_insert = "Error al itentar registrar un " + formulario.id.toLowerCase() + ". Intente más tarde."; 

console.log("id: " + formulario.id);
/*console.log(opcionAlert.innerHTML);*/

console.log(window.location.pathname);
window.addEventListener('load', (event) => {
   if (opcionAlert.innerHTML == "ok") {
		opcionAlert.innerHTML = "sigue";
		caminoFeliz();           		 
   }
   else if (opcionAlert.innerHTML == "error0") {
		opcionAlert.innerHTML = "sigue";
		caminoTriste(error_clave_duplicada);           		 
   }      
   else if (opcionAlert.innerHTML == "error1") {
		opcionAlert.innerHTML = "sigue";
		caminoTriste(eror_insert);           		 
   }      
   else if (opcionAlert.innerHTML == "error2") {
		opcionAlert.innerHTML = "sigue";
		caminoTriste(error_user_duplicado);           		 
   }       
});

function caminoFeliz(){
  Swal.fire({
      icon: "success",
      
      /*html: `<h1>formulario.id registrado exitosamente!!!</h1>`,*/
      title: formulario.id + " registrado exitosamente!!!",
      confirmButtonText: "Continuar",
  }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = window.location.pathname;
          }
   });
}

function caminoTriste(msj_error){
  Swal.fire({
      icon: "error",
      
      //title: "Ya existe un " + formulario.id.toLowerCase() + " con ese DNI. Reintente otra vez ",
      title: msj_error,
      confirmButtonText: "Continuar",
  }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = window.location.pathname;
          }
   });
}

stars.forEach(function(star,index){
	star.addEventListener('mousemove',function(){
		for (let i = 0; i <= index; i++) {
			stars[i].classList.add('checked');
		}
		for (let i = index+1; i < stars.length; i++) {
			stars[i].classList.remove('checked');
		}
	})
	star.addEventListener('click',function(){
		console.log((index+1)*10/5);
	})
})
/*
stars.forEach(function(star,index){
	star.addEventListener('mousemove',function(){
		for (let i = 0; i <= index; i++) {
			stars[i].classList.add('checked');
		}
		for (let i = index+1; i < stars.length; i++) {
			stars[i].classList.remove('checked');
		}
	})
})*/

function validar(posicion) {
	let TAM=4
	let entrada = new Array(TAM);
	entrada[0]=DNI;
	entrada[1]=nombre;
	entrada[2]=apellido;
	/*entrada[3]= dia;
	entrada[4]= hora;*/
	entrada[3]=estado;
/*	entrada[4]=id_empleado;*/
	for (var i = 0; i < posicion; i++) {
	   	switch (i) {
		  case 0:
		    validarInputTextoVacio(entrada[i], "Debe ingresar DNI",  dniMensaje)
		    break;
		  case 1:
		    validarInputTextoVacio(entrada[i], "Debe ingresar nombre", nombreMensaje)
		    break;
		 case 2:
		    validarInputTextoVacio(entrada[i], "Debe ingresar apellido", apellidoMensaje)
		    break;
		/* case 3:
		 break;
		 case 4:
		 break;*/
		 case 3:
		    validarSelect(entrada[i])
		    break;
		}
	}	
	//event.preventDefault();  	  
}
/*function enviado(){
	reservar.textContent = "Se realizo la reserva correctamente.";
	reservar.classList.add("alert", "alert-success");
}*/
function validarSelect(entrada){
	if (entrada.value === ""  || entrada.value === 0 ){
		entrada.style.borderColor = "#F00";
		selectMensaje.textContent = "Debe seleccionar una opcion.";
		selectMensaje.classList.add("alert", "alert-danger");
	} else {
		entrada.style.borderColor = "black";
		selectMensaje.textContent = "";
		selectMensaje.classList.remove("alert", "alert-danger");
	}
}

function validarInputTextoVacio(entrada, mensaje, mensajeElemento) {
	if (entrada.value === "" || entrada.value === null) {
		entrada.style.borderColor = "#F00";
		mensajeElemento.textContent = mensaje;
		mensajeElemento.classList.add("alert", "alert-danger");
  } else {
    	entrada.style.borderColor = "black";
    	entrada.style.color = "black";
    	mensajeElemento.textContent = "";
    	mensajeElemento.classList.remove("alert", "alert-danger");
    }
  }

formulario.addEventListener('submit', function(event) {
    validar(4);

    // Verificar si hay errores de validación
    if (document.querySelectorAll('.alert-danger').length > 0) {
        event.preventDefault();
    }
});
