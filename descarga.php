<?php
include ("php/DataBaseManager.php");
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
        <link rel="stylesheet" href="css/estilo.css">

            <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/reset.css"> <!-- Resetear todos los parametros de CSS para cargar los nuestros desde el inicio -->

    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/images-grid.css">
	  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  	<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="js/funcionesGenerales.js" ></script> <!-- GENERAL SCRIPTS -->
    <script src="js/resizeText.js" ></script> <!-- FOR RESPONSIVE DESIGN -->
    <script src="js/jquery-inertiaScroll.js"></script> <!-- smooth -->
    <!--<script src="js/rueda.js"></script>-->
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
<?php
$files = glob("images/galeria/*.jpg");
$images = [];
$numItems = count($files);
  foreach (glob('uploads/*.png') as $filename) {
    array_push($images, $filename);
  }
  ?>


</head>
<body>

<div class="pag1"> <!-- fit web height and width -->
    <div id="divHeader"> <!-- Div del menu principal -->
        <header id="main-header">
              <a href="/" title="Vuelve a la página de inicio" id="logginato">
                <img src="images/logo.png" alt="Day By Day logo" />
              </a><!-- Logo completo: PNG // background-color: #ececec; border right solid 1px #bdb7aa; -->
        </header>
        <!-- Por defecto el head se va a dividir en  7 casillas: 100% / 7, El header ocupará la primera-->
        <nav id="main-menu" >


            <nav class="cl-effect-5">
            <ul><!-- background-color: #d3cec1; border left dashed #bdb7aa; OMITIR 1º BORDER LI-->
                <!-- AGRUPAMOS LI EN UNA SOLA FILA PARA QUE INLINE-BLOCK NO CREE ESPACIOS -->
                <li>
                  <a class="active" href="index.php"><span data-hover="Inicio">Inicio</span></a>
                </li>
                <li>
                  <a href="descarga.php"><span data-hover="Descargar">Descargar</span></a>
                </li>
                <li>
                  <a href="index.php"><span data-hover="Funciones">Funciones</span></a>
                </li>
                <li>
                  <a href="login.php"><span data-hover="LOGIN">LOGIN</span></a>
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
</div>
<section class="beta-welcome beta-welcome-top">
  <br><br><br>
  <div class="containerDownload">
    <h1>Mobile Application</h1>
    <p>The core of the App experience is its mobile app!
      </br>The app is now available on the Play Store. Click on the link below to access the download page.</p>
    <p>If you're using an iOS or Windows Phone, you can get into the Beta waitlist instead!</p>
    <div class="col-md-12 section-heading-division section-heading section-heading-home text-center">
      <div class="blank-section blank-section-image blank-section-download">
          <img src="images/playstorelogo.png" alt="" height="168px">
          <p>Get the Android App</p>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="beta-welcome beta-welcome-bottom">
  <br><br><br>
  <div class="containerDownload">
    <h1>Desktop Client</h1>
    <p>You have been asking for it, now here it is! The desktop client transmits your computer activity data to your smartphone.
      </br>We hope you'll love it! And if there are some things you don't, we're ever grateful for your feedback. Hit us up by clicking the envelope to your righ</p>
    <p>Please note the client cannot be used as a standalone piece of software. First you need to install our mobile app and log into it. Then you can use the same login information for your Desktop client, and voila, enjoy the additional data!</p>
    <div class="col-md-12 section-heading-division section-heading section-heading-home text-center">
      <br><br><br>
      <div class="blank-section blank-section-image blank-section-download">
          <img src="images/applelogo.png" alt="" height="128px">
          <p>Get the Mac OS client</p>
        </a>
      </div>
      <div class="blank-section blank-section-image blank-section-download">
          <img src="images/windowslogo.png" alt="" height="128px">
          <p>Get the Windows client</p>
        </a>
      </div>
      <div class="blank-section blank-section-image blank-section-download">
          <img src="images/linuxicon.png" alt="" height="128px">
          <p>Get the Linux client</p>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- modal -->


</body>
</html>
