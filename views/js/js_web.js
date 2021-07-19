/**
 * ESTO CONTROLA PARTE DE LA NAVEGACIÓN DE LA PÁGINA, POR LO QUE EN TEORIA NO SE DEBERÍA TENER PROBLEMAS CON LAS VARIABLES INSTACIADAS.  
 * 
 * 
 * 
 * 
 * 
 */



/**
 * ANIMACIÓN PARA CARGA DE PÁGINA ITEC
 */
window.addEventListener("load", function(){
    // console.log("listoo!!")
    document.querySelector(".loader-k").classList.add("loader-ready");
})



/**
 * CONFIGURACION LOGO, ANIMACIONES
 *  
 * */ 

// Esto solo debe ejecutarse en computadoras de mesa y portatiles (Ojo)
// Logo ITEC en el navegador
window.onscroll = function () {
    var y = window.scrollY;
    let logo_img = document.querySelector("#logo_img");
    if(y >= 5){
        logo_img.style.transform = "scale(.9, .9)";
    }else{
        logo_img.style.transform = "scale(1, 1)";
    }
}


/**
 * CONFIGURACION SUB-MENU, ANIMACIÓN
 *  
 * */ 

let cli = document.querySelector(".k-link-submenu");

let estado = true; // controla que la configuración se realize una sola vez
cli.addEventListener("click", ()=>{
        // console.log("tamano display: ", screen.width) // resultado prueba
        if(screen.width <= 768){
            // controla que la navegación funcione sin problemas
            /**
             * El problema con el submenu es que no funciona bien si es que scroll de toda la página no se ubica hasta el final de la página, 
             * cuando se quiere hacer scroll en el nav no se puede, sino el scroll se realiza en la página principal, de modo que no se puede navegar bien en las 
             * opciones hasta que el scroll esté al final de la página.
             * 
             * Por eso utilizamos el siguiente método para que cuando se le de click a la opción que habilita las subopciones que terminan cumbriendo más del espación de la 
             * pantalla, ubique al usuario al final de la página. 
             * 
             * El valor del alto que se ocupa, es un valor arbitrario que supone una alto más que la página, esto para evitar su programación.
             */
            window.scrollTo(0,99999)
        }

        let el = document.querySelector(".k-submenu");
        el.style.opacity  = ".1"
        setTimeout(() => {
            let coord = el.getBoundingClientRect();
            // console.log(coord.left) // resultado prueba
            if(estado){
                // configura la animación del submenu 
                el.style.transform = "translateX(-"+coord.left+"px)";
                estado = false;
            }
            el.style.opacity  = "1" 
        }, 10);

})






/**
 * Animación para las cifras en la página principal
 */

function animacion_cifras() {
    let contadores = document.querySelectorAll(".cifra-num");

    for (const contador of contadores) {

        const actualizar_contador = () => {
            
            let num = parseInt(contador.innerHTML.replace(" ","").replace("+",""));
            let num_max = parseInt(contador.dataset.cantidadTotal);
            let incremento = parseInt(contador.dataset.incremento);
            let division = num_max / incremento;
            
            num = Math.ceil(num + division);
            contador.innerHTML = num;
            console.log("response", num)
            if( num < num_max ){
                setTimeout( actualizar_contador , 50);
            }else{
                console.log("termino!!!")
                contador.innerHTML = contador.dataset.numero;
            }

        }

        actualizar_contador();

    }

}



//--------- API observer
var boxElement;
var prevRatio = 0.0;

// Set things up.
let estado_cifras = true;
window.addEventListener("load", function(event) {
    boxElement = document.querySelector(".k-cifras");
    createObserver();
},  false);


function createObserver() {
    var observer;
    var options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.4
    };
    observer = new IntersectionObserver(handleIntersect, options);
    observer.observe(boxElement);
}

function handleIntersect(entries, observer) {
    if(entries[0].intersectionRatio > prevRatio){
        if(estado_cifras){
            // console.log("ENTRO ")
            estado_cifras = !estado_cifras;
            animacion_cifras();
        }
    }
}