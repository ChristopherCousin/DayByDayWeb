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
   }
?>
