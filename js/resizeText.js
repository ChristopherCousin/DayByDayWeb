var resizeText = function () {
        // Predefinido tamaño de letra que encaje con esas dimensiones
        var predefinidoTamanoFuente = 200; // %
        var predefinidoResolucion = 1024;

        var tamanoActual = $(window).width(); // Ancho de la ventana
        var porcentaje = Math.sqrt(tamanoActual) / Math.sqrt(predefinidoResolucion);
        var nuevoTamanoFuente = predefinidoTamanoFuente * porcentaje;
        $("#intro-text h1").css("font-size", nuevoTamanoFuente*1.5 + '%');
        $("#intro-text h3").css("font-size", nuevoTamanoFuente  + '%');
        $("#main-menu li:not(:last-child)").css("font-size", nuevoTamanoFuente / 2 + '%');
        $(".phone").css("font-size", nuevoTamanoFuente / 2 + '%');

      };

      $(document).ready(function() {
              resizeText(); //ASIGNAR DIMENSIONES

      });

      $(window).resize(function() {
          resizeText(); //ACTUALIZAR DIMENSIONES


      });
