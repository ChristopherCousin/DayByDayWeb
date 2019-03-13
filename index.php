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


<script>

var images = <?php echo json_encode($images); ?>;

          $(function() {
              $('#gallery7').imagesGrid({
                  images: images,
                  align: false,
                  getViewAllText: function(imgsCount) { return 'Ver todas las imágenes' }
              });
          });

</script>
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
                  <a class="active" href="#inicio"><span data-hover="Inicio">Inicio</span></a>
                </li>
                <li>
                  <a href="#descargar"><span data-hover="Descargar">Descargar</span></a>
                </li>
                <li>
                  <a href="#funcionesID"><span data-hover="Funciones">Funciones</span></a>
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

<div id="funcionesID" class="pag3">
  <div class="testasd">
<div class="funciones">

  <section class ="funciones-0">
      <div class="container2">
        <div class="row">
          <div class="col-md-12 funciones-0-titulo text-center">
            <h2 style="font-weight: bold">Automation at your service</h2>
          </div>
          <div class="col-md-4 text-center">
            <div >
              <img src="images/location.png" alt="">
            </div>
            <h2>Room-level Location</h2>
            <div class="detail">
              <p>
                Thanks to brand new indoors location algorithms, Smarter Time can detect where you are at room-level precision by using surrounding Wi-Fi networks.
              </p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <img src="images/learning.png" alt="">
            </div>
            <h2>Learning Capabilities</h2>
            <div class="detail">
              <p>
                Smarter Time relies on a state-of-the art intelligent brain to remember everything you tell it, learn and serve you better day after day.
              </p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <img src="images/tracking.png" alt="">
            </div>
            <h2>Apps and calls tracking</h2>
            <div class="detail">
              <p>
                Smarter Time gathers automatically all the reliable data sources, such as the apps you use, the calls you take or the readings of your phone’s sensors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class ="funciones-1">
    <div class="container2">
      <div class="row">

        <div class="col-md-12 funciones-1-titulo text-center ">
          <h2 style="font-weight: bold">Analytics for every need</h2>
        </div>
        <div class="col-md-4 text-center">
          <div>
            <img src="images/analitic.png" alt="">
          </div>
          <h2>Analytics Panel</h2>
          <div class="detail">
            <p>
              Want to see your time use breakdown at a glance? In the analytics panel, you’ll find details by activities, categories and different time periods.
            </p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div>
            <img src="images/goals.png" alt="">
          </div>
          <h2>Goals and Maps</h2>
          <div class="detail-p">
            <p>
              If you’re interested in keeping track of your movements, or want that extra push of motivation, Smarter Time offers a map display and a goals system.
            </p>
          </div>
        </div>
        <div class="col-md-4 section-heading-division section-heading section-heading-home text-center">
          <div class="blank-section blank-section-image">
            <img src="images/report.png" alt="">
          </div>
          <h2>Weekly Report</h2>
          <div class="detail-p">
            <p>
              Details are important, but so is the big picture. With Smarter Time you’ll get a report highlighting the most important information of the week.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="funciones-2">
    <div class="container2">
      <div class="row">
        <div class="col-md-12 funciones-2-titulo text-center ">
          <h2 style="font-weight: bold;">Integrated multi-platform system</h2>
        </div>
        <div class="col-md-4 text-center">
          <div>
            <img src="images/desktop.png" alt="">
          </div>
          <h2>Desktop Client</h2>
          <div class="detail">
            <p>
              For the professionals, the freelancers and the technophiles out there, time spent on the computer is paramount. Smarter Time tracks it automatically.
            </p>
          </div>
        </div>
        <div class="col-md-4  text-center">
          <div>
            <img src="images/calendar.png" alt="">
          </div>
          <h2>Calendar Integration</h2>
          <div class="detail">
            <p>
              Smarter Time can read the activities you schedule in your calendar and use them to guess where you are and what you’re doing.
            </p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div>
            <img src="images/ios.png" alt="">
          </div>
          <h2>Coming Soon to iOS</h2>
          <div class="detail">
            <p>
              Although Smarter Time is only available on Android for now, an iOS version is in the works and the Beta is coming soon, so if you’re an Apple fan, stay tuned!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
</div>

<div class="pag214">
  <section>
  <?php
   if(isset ($_SESSION["Login"]))
   {
    if($_SESSION["Login"])
    {
      echo '
      <h2>Gallery</h2>
      <form action = "php/upload.php" method = "post" enctype = "multipart/form-data">
        Select image to upload:
        <input type="file"   name="fileToUpload"  id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>

      <article id="gallery7"></article>';
    }
} ?>
  </section>
</div>

<?php
$articles = getArticles();
echo '  <section class ="funciones-0">
      <div class="container2">
        <div class="row">
          <div class="col-md-12 funciones-0-titulo text-center">
            <h2 style="font-weight: bold">New Stuff</h2>
          </div>';
for($x = 0; $x < count($articles) ; $x++)
{
  echo '
            <div class="col-md-4 text-center">
              <div>
                <img src="'.$articles[$x]->imageURL.'" alt="">
              </div>
              <h2>'.$articles[$x]->title.'</h2>
              <div class="detail">
                <p>
                  '.$articles[$x]->description.'
                </p><br><br><br><br>
              </div>
            </div>';
 }
echo '            </div>
          </div>
        </div>
      </section>';
?>
<!--<div class="pag3"> fit web height and width
    <section id="acercade">
    </section>
</div>-->
</body>
</html>
