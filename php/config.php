<?php
/*   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'daybyday');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   */
   $usuario = root;
   $contraseña = {""};
   $mbd = new PDO('mysql:host=localhost;dbname=daybyday', $usuario, $contraseña);
?>
