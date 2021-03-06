function validar(){
	var nombre, direccion, nit, numContacto, correo, expresion, val;

	nombre=document.getElementById("nombre").value;
	apellido=document.getElementById("apellido").value;
	direccion=document.getElementById("direccion").value;
	nit=document.getElementById("nit").value;
	numContacto=document.getElementById("numContacto").value;
	correo=document.getElementById("correo").value;

	val = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;

	//expresion=/^[a-zA-Z\s]*$/;  valp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
	//expresion= /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
	expresion=/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

	if (nombre.length>30 || nombre.length<4) {
		Swal.fire({
           title: "Nombre Demasiado Largo"
        });
		return false;
	}else if(!expresion.test(nombre)){
		 Swal.fire({
           title: "No se permiten numeros en el Nombre"
        });
		return false;
	}
else if(apellido.length>30 || apellido.length<4) {
		Swal.fire({
           title: "Campo apellido no valido"
        });
		return false;
	}else if(!expresion.test(apellido)){
		 Swal.fire({
           title: "Campo apellido no valido"
        });
		return false;
	}




	else if(direccion.length>200 || direccion==="") {
		Swal.fire({
           title: "Direccion Demasiado Larga"
        });
		return false;
	}else if(nit.length>17) {
		Swal.fire({
           title: "NIT Demasiado Largo"
        });
		return false;
	}
	else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(nit))) {
		Swal.fire({
           title: "El Formato del NIT no es Valido"
        });
		return false;
	}
	else if(isNaN(numContacto)){
		Swal.fire({
           title: "Ingrese solo numeros en su Telefono"
        });
		return false;

	}else if(numContacto.length>20) {
		Swal.fire({
           title: "Su Telefono es demasiado largo +"
        });
		return false;
	}else if(numContacto.length<8) {
		Swal.fire({
           title: "Ingrese Correctamente su Telefono -"
        });
		return false;

	}else if (!val.test(correo)) {
		Swal.fire({
           title: "El correo no es valido"
        });
		return false;
	}
	
}