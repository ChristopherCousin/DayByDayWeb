<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Day By Day, administrar, time, administrar tiempo, administrador de tiempo, control el tiempo, procrastinar">
    <meta name="author" content="Christopher">
    <meta name="description" content="Day By Day | Una nueva forma de administrar tu tiempo">
    <meta name="generator" content="Atom">
    <meta name="viewport" content="width=device-width,
                  initial-scale=1,
                  maximum-scale=1">
    <title>Day By Day</title>
    <link rel="icon" href="fav_icon.png">
    <link rel="stylesheet" href="css/reset.css"> <!-- Resetear todos los parametros de CSS para cargar los nuestros desde el inicio -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/images-grid.css">
	  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  	<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="js/funcionesGenerales.js" ></script> <!-- GENERAL SCRIPTS -->
    <script src="js/resizeText.js" ></script> <!-- FOR RESPONSIVE DESIGN -->
    <script src="js/jquery-inertiaScroll.js"></script> <!-- smooth -->
    <script src="js/rueda.js"></script>
    <script src="js/images-grid.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script>
//Contenido diferente
$('#menu a').click(function(e){
     hideContentDivs();
     var tmp_div = $(this).parent().index();
     $('.main div').eq(tmp_div).show();
  });

function hideContentDivs(){
    $('.main div').each(function(){
    $(this).hide();});
}
hideContentDivs();
</script>

<script>

          var images = ['images/galeria/1.jpg',
        'images/galeria/2.jpg',
        'images/galeria/3.jpg',
        'images/galeria/4.jpg',
        'images/galeria/5.jpg',
        'images/galeria/6.jpg'];

          $(function() {
              $('#gallery7').imagesGrid({
                  images: images,
                  align: true,
                  getViewAllText: function(imgsCount) { return 'Ver todas las imágenes' }
              });

          });

      </script>
</head>
<body>

<div class="pag1"> <!-- fit web height and width -->
    <div id="divHeader"> <!-- Div del menu principal -->
        <header id="main-header">
              <a href="/" title="Vuelve a la página de inicio" id="logo">
                <img src="images/logo.png" alt="Day By Day logo" />
              </a><!-- Logo completo: PNG // background-color: #ececec; border right solid 1px #bdb7aa; -->
        </header>
        <!-- Por defecto el head se va a dividir en  7 casillas: 100% / 7, El header ocupará la primera-->
        <nav id="main-menu" >


            <nav class="cl-effect-5">
            <ul><!-- background-color: #d3cec1; border left dashed #bdb7aa; OMITIR 1º BORDER LI-->
                <!-- AGRUPAMOS LI EN UNA SOLA FILA PARA QUE INLINE-BLOCK NO CREE ESPACIOS -->
                <li>
                  <a class="active" href="#inicio"><span data-hover="Inicio">Inicio</span></a>
                </li>
                <li>
                  <a href="#descargar"><span data-hover="Descargar">Descargar</span></a>
                </li>
                <li>
                  <a href="#features"><span data-hover="Funciones">Funciones</span></a>
                </li>
                <li>
                  <a href="#FAQ"><span data-hover="FAQ">FAQ</span></a>
                </li>
                <li>
                  <a href="#inicio" id="header__icon" class="header__icon">&#9776;</a> <!-- COLLAPSE MENU -->
                </li>
            </ul>
            </nav>

        </nav>
    </div>    <!-- border bottom solid 1px #222121 -->

    <div class='vid'>
       <video autoplay muted loop id="myVideo" >
           <source src="videos/tech5.mp4" type="video/mp4">
         </video>

     </div>
     <section id="intro2"> <!-- Div de la imagen principal -->
       <!-- <div id="flecha-abajo"><i class="down"></i></div> -->
       <div id="content">
       <div id="intro-text">
         <h3>Una nueva forma de administrar tu tiempo</h3>
         <span>Day</span><span>By</span><span>Day</span>
       </div>

     <aside id="network">
         <ul>
           <li><img src="images/network/whatsapp.png" alt="whatsapp"></li>
           <li><img src="images/network/facebook.png" alt="facebook"></li>
           <li><img src="images/network/twitter.png"  alt="twitter"></li>
         </ul>
       </aside>
       </div>
     </section>
<!-- -->
</div>

<div class="pag2"> <!-- fit web height and width -->

    <div  id="asdd" class="transparente">
      <nav id="menu_unitegallery"> <!-- Ocupa un 10% de altura, 100% ancho -->

          <nav class="cl-effect-1">
      <ul id="menu">
        <li  class="tumadre" id="link1"><a href="#asdd">Contacto</a></li>
        <li class="tumadre2" id="link2"><a href="#asdd">¿Por qué lo usamos?</a></li>
      </ul>
    </nav>
  </nav>
  <section class="transparenteTexto">
            <div id="page1" class="contentb fadein">
    <form action="/action_page.php" class="container">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
            </div>
            <div id="page2" class="contentb fadeout">
            <h1>¿Por qué lo usamos?</h1>
            <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
            </div>
  </section>
  </div>
<!--
  <section id="download" >
        <article id="android" >
          </article>
          <article id="ios">
          </article>
  </section>
</div>
-->
</div>
<div class="pag3">
  <section>
  <h2>Gallery</h2>
  <?php if(isset ($_SESSION["Login"]))
  {
    if($_SESSION["Login"])
    {
      echo '<form action = "php/upload.php" method = "post" enctype = "multipart/form-data">
        Select image to upload:
        <input type="file"   name="fileToUpload"  id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>';
    }
} ?>
  <article id="gallery7"></article>
  </section>
</div>
<!--<div class="pag3"> fit web height and width
    <section id="acercade">
    </section>
</div>-->

</body>
</html>