/* 
 * Librería PubliLabs
 * Desarrollado por: Ellery Aguilar
 * 
 * **Estructura**
 *  //Función de inicio
 *      //Optener la pagina actual
 *      //Iniciar algunas variables del programa
 *      //Especificar comportamiento para cuando se recarga la página
 *      
 *  //Salir del sistema
 *  //Imprimir mensajes. Usualmente, después de un AJAX exitoso
 *  //Cambiar el formato de la fecha de dd-mm-yyy a yyyy-mm-dd y viceversa
 *  //Validar distintos elementos y condiciones
 *          *- Entrada Numérica
 *          *- Campo Vacío
 *          *- Select válido
 *          *- Correo Electrónico
 *  //Convertir Hora
 *  //Menu de la NavBar
 *  //Control de agregación de items al elemento de tipo tabs
 *  //Activar una pestaña de las tabs
 *  //Cargar CKEditor
 *  //Borrar CKEditor
 *  //Función botón Eliminar
 *  //Función botón Editar
 *  **Fin Estructura**
 */

function changeLang(lang) {
    if (window.localStorage) {
        localStorage.setItem('lang', lang);
    }
    var url = window.location.href;
    var fst_part = url.substring(0, url.indexOf('_') - 2);
    var snd_part = url.substring(url.indexOf('_') * 2, url.lastIndexOf("/"));
    window.location.replace(fst_part + lang + "_" + lang.toUpperCase() + snd_part);
}

function loadContent(divName, pageURL) {
    $("#" + divName).load(pageURL);
}

function swapVideo(div1, div2) {
    var playing = false;
    //$('#welcome, #home-video').fadeToggle( "slow", "linear" );
    $(div1).fadeOut("fast", function () {
        $(div2).fadeIn("slow");
        if (playing === false) {
            document.getElementById('video').play();
            playing = true;
        } else {
            document.getElementById('video').pause();
            playing = false;
        }
    });
}

/*function goToPage(href) {
 
 $('html,body').animate({
 scrollTop: $(window.location.hash).offset().top
 });
 
 $('html, body').animate({scrollTop: $(this.hash).offset().top - 50}, 1000);
 return false;
 });*/

// handle links with @href started with '#' only
function goToID(href) {
// target element id
    var id = href;
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

// top position relative to the document
    var pos = $id.offset().top;
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
}