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
  $("#intro2").css({ // ESTABLECER NUEVAS DIMENSIONES
    'width':w + 'px',
    'height':hWelcome + 'px',
  });

  $(".pag2").css({ // ESTABLECER NUEVAS DIMENSIONES
    'width':w + 'px',
    'height':h + 'px',
  });

  $(".imgs-grid").css({ // ESTABLECER NUEVAS DIMENSIONES
    'max-width':w + 'px',
  });

  $("#myVideo").css({
    'max-width':w + '%',
    'max-height':h + '%'
  });



    /*
            Resoluciones:
            Dispositivo Anchura
            Movil   0 - 479
            Tablet portrait   480 - 767
            Tablet landscape   768 - 1279
            Desktop > 1280
      */


             if (w2 >= 1280) {
                //$("#mensaje").html("<p>Vision pantalla grande (portatil y ordenador)</p>");
      //$("#mensaje").html(sHeight + " " + sHeight2 + " " + h + " " + h2 + " " + divHeaderHeight + " " + hN);

            }
            else if (w2 >= 768 && w < 1280) {
              //  $("#mensaje").html("<p>Vision pantalla mediana-grande (tablets)</p>");
      //$("#mensaje").html(sHeight + " " + sHeight2 + " " + h + " " + h2 + " " + divHeaderHeight + " " + hN);
        }

            else if (w2 >= 480) {
          //      $("#mensaje").html("<p>Vision pantalla mediana (tablets)</p>");
          //  $("#mensaje").html(sHeight + " " + sHeight2 + " " + h + " " + h2 + " " + divHeaderHeight + " " + hN);

            }
            else {
          //      $("#mensaje").html("<p>Vision pantalla pequeña (movil)</p>");

      //$("#mensaje").html(sHeight + " " + sHeight2 + " " + h + " " + h2 + " " + divHeaderHeight + " " + hN);

            }






};





$(document).ready(function() {
        Dimensiones(); //ASIGNAR DIMENSIONES

        (function($) {

          $('#header__icon').click(function(e){
            $('#main-header').toggleClass('ocultar'); //ocultar / mostrar
            $("#main-menu li:not(:first-child)").toggleClass('transformar'); //hacer visible todos menos inicio al ocultar / mostrar
             // $("#main-menu li:last-child").toggleClass('animar');
          });

        })(jQuery);
/*
        $("").inertiaScroll({
          parent: $("#content")
        });
*/
        //Contenido diferente


        $('#menu a').click(function(){
              $('.transparenteTexto div').hide();
              var tmp_div = $(this).parent().index();
              $('.transparenteTexto div').eq(tmp_div).show();
        });
        $('.transparenteTexto div').hide();


        $("#Trigger2").click(function () {
            if ($("#Fader").hasClass("fadeout"))
                $("#Fader").removeClass("fadeout").addClass("fadein");
            else
                $("#Fader").removeClass("fadein").addClass("fadeout");
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
   var divHeaderHeight = $("#pag").height();
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

/*
$(".transparenteTexto").css({ // ESCONDER TEXTO
  'opacity': scrollPercent*3
});
*/
}

document.getElementById("prueba").innerHTML = docHeight;


if (scroll < scroll2 && scrollPercentRounded < 15) { //En caso que la posicion del scroll sea menor al tamaño de la pantalla

  $("#intro-text span:first-of-type").css({
    'margin-right':scrollPercentRounded + '%'
  });
  $("#intro-text span:last-of-type").css({
    'margin-left':scrollPercentRounded + '%'
  });

}






}, false);
