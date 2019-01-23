var resizeText = function () {
        // Predefinido tamaño de letra que encaje con esas dimensiones
        var predefinidoTamanoFuente = 200; // %
        var predefinidoResolucion = 1024;

        var tamanoActual = $(window).width(); // Ancho de la ventana
        var porcentaje = Math.sqrt(tamanoActual) / Math.sqrt(predefinidoResolucion);
        var nuevoTamanoFuente = predefinidoTamanoFuente * porcentaje;
        $("#transparente").css("background-size", nuevoTamanoFuente - '%');
        $("#intro-text span").css("font-size", nuevoTamanoFuente*1.5 + '%');
        $("#intro-text h3").css("font-size", nuevoTamanoFuente  + '%');
          $("#intro-text h3").css("font-size", nuevoTamanoFuente  + '%');
        $("#main-menu li:not(:last-child)").css("font-size", nuevoTamanoFuente / 2 + '%');
        $(".phone").css("font-size", nuevoTamanoFuente / 2 + '%');
      //  $("#menu_unitegallery").css("font-size", '50%');
        $("#menu_unitegallery").css("font-size", nuevoTamanoFuente / 2 + '%');
          $("#page1 section > article ").css("font-size", nuevoTamanoFuente / 2 + '%');
          $(".container ").css("font-size", nuevoTamanoFuente / 2.5 + '%');
      };

      $(document).ready(function() {
              resizeText(); //ASIGNAR DIMENSIONES

      });

      $(window).resize(function() {
          resizeText(); //ACTUALIZAR DIMENSIONES


      });
