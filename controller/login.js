// Archivo para enviar los datos al servidor y redirigir al usuario en caso de tener datos correctos o mostrarle un mensaje de error
const loginForm=document.getElementById(`login-form`);
const message=document.getElementById(`message`);

loginForm.addEventListener(`submit`,(e)=>{
    e.preventDefault();
    // Para recibir los datos que tenga guardado el formulario debemos crear el objeto FormData
    const datosForm=new FormData(loginForm);
    // Enviamos nuestros datos al servidor
    fetch(`../model/login.php`,{
        // Aqui le enviamos el metodo de envio y los datos a enviar
        method: `POST`,
        body: datosForm
    })
        // Recibimos la respuesta del servidor
        .then(data=>data.json())
        .then(data=>{
            // En caso de tener los datos correctos, lo redirigimos al panel
            if(data=='1'){
                location.href=`panel.html`;
            // En caso de tener datos incorrectos, enviaremos un mensaje de error
            }else{
                message.innerHTML="¡DATOS INCORRECTOS!"
            }
    })
});

// Al limpiar los datos del formulario, también debe eliminarse el mensaje de error, en caso de haberlo
loginForm.addEventListener(`reset`,()=>message.innerHTML=``);