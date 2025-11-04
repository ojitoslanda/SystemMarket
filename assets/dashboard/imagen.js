const inputImg = document.querySelector("#imgFile")
const visual = document.querySelector("#visual")
inputImg.addEventListener("change", function(){
    //Guardamos el primer archivo seleccionado
     const saveFile = inputImg.files[0]
     console.log(saveFile)
    //Si el usuario selecciono un archivo (TRUE)
    if(saveFile){
        //Instanciamos el objeto
        const lector = new FileReader() 
        //Cuando el lector termine de leer la imagen
        lector.onload = function(evento){
            //Monstramos en la etiqueta <img>
            visual.src = evento.target.result;
            visual.style.display = "block"
        } 
        //Luego le decimos que lea el archivo como una URL
        lector.readAsDataURL(saveFile)
    }
})