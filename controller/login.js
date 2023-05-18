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
        // La respuesta del servidor la debemos convertir en texto
        .then(resp=>resp.text())
        // Los datos del servidor geralmente se guardan en: data
        .then(data=>{
            if(data=='1'){
                location.href=`panel.html`;
            }else{
                message.innerHTML="¡DATOS INCORRECTOS!"
            }
    })
});