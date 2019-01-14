/*IMPORTANTE: MOBILE FIRST, Dieseñar la página web
para que funcione a partir de un dispositivo móvil.
*/
var Dimensiones=function(){

    var h = $(window).height(),
    w = $(window).width();

    var h2 = window.innerHeight ? window.innerHeight : $(window).height(),
    w2 = window.innerWidth ? window.innerWidth : $(window).width();
    var divHeaderHeight = $("#divHeader").height();
    var hN = h - divHeaderHeight; // CORREGIR POSICION


    var sHeight=(window.innerHeight-$(window).height());
    var sHeight2=(h2 - sHeight);


    var hWelcome = h / 2;
    var wWelcome = w / 2;

    var wPhone = w / 2;
  var hPhone = h / 2;
    $("#intro").css({ // ESTABLECER NUEVAS DIMENSIONES
      'width':w + 'px',
      'height':hWelcome + 'px',
    });

    $("#download").css({ // ESTABLECER NUEVAS DIMENSIONES
      'width':w + 'px',
      'height':hWelcome + 'px',
    });

    $("#acercade").css({ // ESTABLECER NUEVAS DIMENSIONES
      'width':w + 'px',
      'height':h + 'px',
    });
};

$(document).ready(function() {
        Dimensiones(); //ASIGNAR DIMENSIONES

        (function($) {

          $('#header__icon').click(function(e){
            $('#main-header').toggleClass('ocultar');
            $("#main-menu li:not(:first-child)").toggleClass('transformar');
            $("#main-menu li:first-child").toggleClass('ocultar');
          });

        })(jQuery);

});

//SE EJECUTA UNA VEZ CARGADA LA PÁGINA COMPLETAMENTE
$(window).load(function() {
        Dimensiones(); //ASIGNAR DIMENSIONES
});

//CADA VEZ QUE SE REAJUSTA LA VENTANA
$(window).resize(function() {
    Dimensiones(); //ACTUALIZAR DIMENSIONES
});
