<<<<<<< HEAD
var resizeText = function () {
        // Predefinido tamaño de letra que encaje con esas dimensiones
        var predefinidoTamanoFuente = 200; // %
        var predefinidoResolucion = 1024;

        var tamanoActual = $(window).width(); // Ancho de la ventana
        var porcentaje = Math.sqrt(tamanoActual) / Math.sqrt(predefinidoResolucion);
        var nuevoTamanoFuente = predefinidoTamanoFuente * porcentaje;
        $("#acercade h1").css("font-size", nuevoTamanoFuente + '%');
        $("#acercade p").css("font-size", nuevoTamanoFuente / 2+ '%');
        $("#intro-text h1").css("font-size", nuevoTamanoFuente + '%');
        $("#intro-text h3").css("font-size", nuevoTamanoFuente / 2 + '%');
        $("#main-menu li:not(:last-child)").css("font-size", nuevoTamanoFuente / 2 + '%');
        $(".phone").css("font-size", nuevoTamanoFuente / 2 + '%');

      };

      $(document).ready(function() {
              resizeText(); //ASIGNAR DIMENSIONES

      });

      $(window).resize(function() {
          resizeText(); //ACTUALIZAR DIMENSIONES


      });
=======
var resizeText = function () {
        // Predefinido tamaño de letra que encaje con esas dimensiones
        var predefinidoTamanoFuente = 200; // %
        var predefinidoResolucion = 1024;

        var tamanoActual = $(window).width(); // Ancho de la ventana
        var porcentaje = Math.sqrt(tamanoActual) / Math.sqrt(predefinidoResolucion);
        var nuevoTamanoFuente = predefinidoTamanoFuente * porcentaje;
        $("#intro-text h1").css("font-size", nuevoTamanoFuente + '%');
        $("#intro-text h3").css("font-size", nuevoTamanoFuente / 2 + '%');
        $("#main-menu li:not(:last-child)").css("font-size", nuevoTamanoFuente / 2 + '%');
        $(".phone").css("font-size", nuevoTamanoFuente / 2 + '%');

      };

      $(document).ready(function() {
              resizeText(); //ASIGNAR DIMENSIONES

      });

      $(window).resize(function() {
          resizeText(); //ACTUALIZAR DIMENSIONES


      });
>>>>>>> 0161d0250a41ce2230b53dfe6fee6b84066ce558
