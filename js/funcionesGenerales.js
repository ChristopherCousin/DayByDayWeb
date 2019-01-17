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
            $('#main-header').toggleClass('ocultar'); //ocultar / mostrar
            $("#main-menu li:not(:first-child)").toggleClass('transformar'); //hacer visible todos menos inicio al ocultar / mostrar
              $("#main-menu li:last-child").toggleClass('animar');
          });

        })(jQuery);

        $("").inertiaScroll({
          parent: $("#content")
        });
});

//SE EJECUTA UNA VEZ CARGADA LA PÁGINA COMPLETAMENTE
$(window).load(function() {
        Dimensiones(); //ASIGNAR DIMENSIONES
});

//CADA VEZ QUE SE REAJUSTA LA VENTANA
$(window).resize(function() {
    Dimensiones(); //ACTUALIZAR DIMENSIONES
});

window.addEventListener("scroll", function(event) {
var scroll = window.scrollY //Modern Way (Chrome, Firefox)
   || window.pageYOffset //(Modern IE, including IE11
   || document.documentElement.scrollTop; //(Old IE, 6,7,8))

   var h = $(window).height();
   var divHeaderHeight = $("#divHeader").height();
   var hN = h - divHeaderHeight; // CORREGIR POSICION

var scroll2 = $(window).height();
var scroll3 =$("#intro-text").width();

//Obtener el % del scroll para posteriormente poder establecer un maximo % y que no se salga de la pantalla
          var scrollTop = $(window).scrollTop();
					var docHeight = $(document).height();
					var winHeight = $(window).height();
          var scrollPercent = (scrollTop) / (docHeight - winHeight);
					var scrollPercentRounded = Math.round(scrollPercent*100);
/*
if (scroll < h) {
  $("#acercade").css({ // ESTABLECER NUEVAS DIMENSIONES
    'margin-top':scroll + 'px'
  });
}
*/

if (scroll < scroll2) { //En caso que la posicion del scroll sea menor al tamaño de la pantalla
/*
  $("#intro-text").css({
    'margin-top': scroll + 'px'
  });
*/
$("#download").css({
  'padding-top':scroll + 'px'
});

$(".pag2 > div:first-of-type").css({ // ESCONDER TEXTO
  'opacity': scrollPercent*3
});

}

document.getElementById("prueba").innerHTML = docHeight;


if (scroll < scroll2 && scrollPercentRounded < 15) { //En caso que la posicion del scroll sea menor al tamaño de la pantalla

  $("#intro span:first-of-type").css({
    'margin-right':scrollPercentRounded + '%'
  });
  $("#intro span:last-of-type").css({
    'margin-left':scrollPercentRounded + '%'
  });

}






}, false);
