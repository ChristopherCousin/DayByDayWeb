<<<<<<< HEAD
/*var fileExt = {};
    fileExt[0]=".png";
    fileExt[1]=".jpg";
$.ajax({
    // CONFIGURAR CARPETA COMO VISIBLE
    url: '../images/intro',
    success: function (data) {
       // MOSTRAR LAS IMAGENES PNG O JPG
       var intro = $('#intro');
       var backgrounds = ['url(/images/intro/backgroundIntro.jpg)'];
       $(data).find("a:contains(" + fileExt[0] + "),a:contains(" + fileExt[1] + ")").each(function () {
           var filename = this.href.replace(window.location.host, "").replace("http://", ""); // SELECCIONAR NOMBRES
           $("#fileNames").append( "<p>" + filename + "</p>");
           var backgrounds = [
             'url(../images/filename)'
           ];
       });


       var current = 0;
       function nextBackground() {
           intro.css('background-image',backgrounds[current = ++current % backgrounds.length]);
           setTimeout(nextBackground, 10000);
       }

       setTimeout(nextBackground, 10000);
       intro.css('background-image', backgrounds[0]); // POR DEFECTO


       $("#fileNames").append('</ul>');
     }
  });
*/
=======
/*var fileExt = {};
    fileExt[0]=".png";
    fileExt[1]=".jpg";
$.ajax({
    // CONFIGURAR CARPETA COMO VISIBLE
    url: '../images/intro',
    success: function (data) {
       // MOSTRAR LAS IMAGENES PNG O JPG
       var intro = $('#intro');
       var backgrounds = ['url(/images/intro/backgroundIntro.jpg)'];
       $(data).find("a:contains(" + fileExt[0] + "),a:contains(" + fileExt[1] + ")").each(function () {
           var filename = this.href.replace(window.location.host, "").replace("http://", ""); // SELECCIONAR NOMBRES
           $("#fileNames").append( "<p>" + filename + "</p>");
           var backgrounds = [
             'url(../images/filename)'
           ];
       });


       var current = 0;
       function nextBackground() {
           intro.css('background-image',backgrounds[current = ++current % backgrounds.length]);
           setTimeout(nextBackground, 10000);
       }

       setTimeout(nextBackground, 10000);
       intro.css('background-image', backgrounds[0]); // POR DEFECTO


       $("#fileNames").append('</ul>');
     }
  });
*/
>>>>>>> 0161d0250a41ce2230b53dfe6fee6b84066ce558
