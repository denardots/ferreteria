// Este archivo solo se utiliza en el login para comprobar si el usuario tiene una sesión abierta
// Utilizamos una función flecha y un fetch para pedir al servidor la información de la sesión
const session=()=>{
    // Para esto pedimos al servidor que nos devuelva si existe una sesión abierta
    fetch(`../model/session.php`)
        // Recibimos la respuesta del servidor
        .then(data=>data.json())
        .then(data=>{
            // En caso de tener una sesión abierta, se redirigirá al panel
            if(data==`1`){
                location.href=`panel.html`;
            }
    })
}

// Guardamos la función de sesión dentro de otra función flecha y le agregamos la palabra async, para convertir cualquier respuesta en una promesa
// La palabra clave await, hace que JavaScript espere hasta que la función session envie una respuesta
const result=async()=>await session();

// Llamamos a la función final para comprobar la sesión del usuario
result();