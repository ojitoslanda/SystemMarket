//MANIPULACION DEL DOM
//Document Object Model (Modelo de Objeto de Documento)
const btnEditar = document.querySelectorAll("#btnEditar");
const btnEliminar = document.querySelectorAll("#btnEliminar");
const formEditar = document.getElementById("formEditar");
let idusr = document.querySelector("#idusr")
let uname = document.querySelector("#nom")
let ucorreo = document.querySelector("#correo")
let uclave = document.querySelector("#clave")
let rol = document.querySelector("#roles")

btnEditar.forEach(function (botones) {
    botones.addEventListener("click", function () {
        formEditar.style.display = "block";
        const nom_u = botones.getAttribute("data-nombre")
        const correo_u = botones.getAttribute("data-correo")
        const pass_u = botones.getAttribute("data-pass")
        const rol_u = botones.getAttribute("data-rol")
        const id_u = botones.getAttribute("data-iduser")
        uname.value = nom_u
        ucorreo.value = correo_u
        uclave.value = pass_u
        rol.value = rol_u
        idusr.value = id_u
    })
})

btnEliminar.forEach(function (botones) {
    botones.addEventListener("click", function () {
        const idUser = botones.getAttribute("data-id-user")
        alert("Eliminaremos el usuario con el ID: " + idUser)
        //Almacenar en un objeto 
        let datosUser = {  id_u: idUser };
        fetch("php/dashboard/usuario_eliminar.php", {
            method: "POST",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json",
            }, body: JSON.stringify({ seleccion: datosUser }),
        }).then(function (data) { return data.json(); })
          .then((myJson) => { 
                let longitud_usuario = Object.keys(myJson).length  
                if(longitud_usuario === 0){
                    alert("No tienes almacenado ningun dato")
                }else{
                    window.location.reload(); 
                }
            });
    })
})

cancelar_formeditar = document.getElementById("cancelar_formeditar");
cancelar_formeditar.addEventListener("click", function(){
    formEditar.style.display = "none";
    uname.value = ""
    ucorreo.value = ""
    uclave.value = ""
    rol.value = ""
})

