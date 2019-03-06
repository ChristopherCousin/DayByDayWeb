<?php
   include("config.php");
   /*
   function addImageLog($name, $link)
   {
     foreach($mbd->query('SELECT * from FOO') as $fila) {
       print_r($fila);
   }
   }

/*
function addImageLog($name, $link)
{

  mysqli_real_escape_string($name);
  mysqli_real_escape_string($link);

  $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     header('Location: '.$URL1);
  }else {
     header('Location: '.$URL2);
  }
}
*/
?>
