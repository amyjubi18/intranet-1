with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Debe escribir su nombre completo");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su correo electrónico");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe confirmar contraseña");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Las contraseñas no coinciden");
			confirm_password.focus();
		}
		if(ok && id_permisos.value==""){
			ok=false;
			alert("Seleccione la gerencia ");
			id_permisos.focus();
		}


		if(ok){ submit(); }
	}
}
