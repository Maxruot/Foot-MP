
/* constantes */

const nombre = document.getElementById("nombre");
const email = document.getElementById("email");
const pass = document.getElementById("password");
const passConfirm = document.getElementById("password_confirm");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings"); /*mensajes de error */


/* event listener para evento submit , para enviar */
form.addEventListener("submit", e=>{
    e.preventDefault(); /* evitar que se envie automaticamente */
    let warnings = "";
    let entrar = false;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    parrafo.innerHTML = "";

    /* validacion */

    if(nombre.value.length < 6){
        warnings += "El nombre no es válido (debe tener más de 6 caracteres)<br>";
        entrar = true;
    }

    if(!regexEmail.test(email.value)){
        warnings += "El email no es válido<br>";
        entrar = true;
    }

    if(pass.value.length < 8){
        warnings += "La contraseña no es válida (debe tener más de 8 caracteres)<br>";
        entrar = true;
    }

    if(pass.value !== passConfirm.value) {
        warnings += "Las contraseñas no coinciden<br>";
        entrar = true;
    }

    if (entrar) {
        parrafo.innerHTML = warnings;
    } else {
        parrafo.innerHTML = "REGISTRADO CON ÉXITO!";
        parrafo.classList.add("sent"); 
        form.reset(); /* reset para limpiar */
        form.submit(); /* enviar el formulario */
    }
});
