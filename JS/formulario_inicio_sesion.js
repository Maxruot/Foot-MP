/* constantes */

const form = document.getElementById("form");
const email = document.getElementById("email");
const password = document.getElementById("password");
const warnings = document.getElementById("warnings"); /*mensajes de error */


/* event listener para evento submit , para enviar*/

form.addEventListener("submit", (e) => {
  e.preventDefault();/* evitar que se envie automaticamente */
  let isValid = true;
  
  if (!email.value.trim()) {
    warnings.textContent = "Por favor, introduce tu dirección de correo electrónico";
    isValid = false;


  } else if (!/\S+@\S+\.\S+/.test(email.value)) {
    warnings.textContent = "Por favor, introduce una dirección de correo electrónico válida";
    isValid = false;
  }
  
  
  if (!password.value.trim()) {
    warnings.textContent = "Por favor, introduce tu contraseña";
    isValid = false;
  }

  if (isValid) {
    // Aqui para enviar los datos del formulario al servidor y procesarlos
    console.log("Datos de inicio de sesión válidos");
    form.reset();  /* reset para limpiar */
  }
});

