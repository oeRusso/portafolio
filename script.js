// funcion q aplica un estilo a la opcion selecionada  en el menu y quita la previamente seleccionada

function seleccionar(link) {
    let opciones = document.querySelectorAll("#links a");

    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    opciones[4].className = "";

    link.className = "seleccionado";

    // hacemos desaparecer el menu una vez ha seleccionado una opcion en el modo responsive 
    let x = document.getElementById("nav");
     x.className = "";
}


// funcion q muestra el menu responsive

function responsiveMenu(){

    let x = document.getElementById("nav");

    

    if (x.className === "") {
        x.className = "responsive";
    }else{
        x.className = "";
    }

}

// detecto el scrolling para habilitar la animacion a la barra de habilidades

window.onscroll = function(){
    efectoHabilidades();
}

function efectoHabilidades() {
    let skills = document.getElementById("skills");
    let distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;

    if (distancia_skills >= 300) {
        
        document.getElementById("html").classList.add("barra-progreso1");
        document.getElementById("js").classList.add("barra-progreso2");
        document.getElementById("sql").classList.add("barra-progreso3");
        document.getElementById("php").classList.add("barra-progreso4");
        document.getElementById("laravel").classList.add("barra-progreso5");
        
    }
}

/*TODO: min 59.00 */