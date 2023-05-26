// Este archivo se utiliza en cualquier archivo que necesite tener una sesión abierta para poder ingresar
// Utilizamos una función flecha y un fetch para pedir al servidor la información de la sesión
const session=()=>{
    // Para esto pedimos al servidor que nos devuelva si existe una sesión abierta
    fetch(`../model/session.php`)
        // Recibimos la respuesta del servidor
        .then(data=>data.json())
        .then(data=>{
            // En caso de no tener una sesión abierta, se redirigirá al login
            if(data==`0`){
                location.href=`login.html`;
            }
        })
}

// Guardamos la función de sesión dentro de otra función flecha y le agregamos la palabra async, para convertir cualquier respuesta en una promesa
// La palabra clave await, hace que JavaScript espere hasta que la función session envie una respuesta
const result=async()=>await session();

// Llamamos a la función final para comprobar la sesión del usuario
result();