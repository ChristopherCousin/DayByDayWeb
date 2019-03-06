<?php


  //DATABASE MANAGER
  include("config.php");
  include("login.php");
  session_start();

   //LOCATION VARIABLES
   $URL1 = "../index.html";
   $URL2 = "../login.html";
   if($_SERVER["REQUEST_METHOD"] == "POST") {

     if(isset($_POST) && $username!='' && $password!='') {

       $sql=$mdb->prepare("SELECT username,password FROM users WHERE username=:username2 AND password=:password");
       $sql->bindParam(1,$username2)
       $sql->bindParam(2,$password2)
       $password2 = $password;
       $username2 = $username;
       $sql->execute(array($password2, $username2));

      while ($sql->fetch()) {
         echo "<script type='text/javascript'>alert('ok');</script>";

         //$_SESSION['username']=$username;
       }

       //INICIAR Yaf_Session
       //header('Location: '.$URL1);
     }
      // username and password sent from form

      /*
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

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
      */
   }
?>
