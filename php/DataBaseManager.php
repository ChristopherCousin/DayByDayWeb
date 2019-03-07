<?php
   include("config.php");

   function test($user, $password)
   {
     $stmt = $pdo->prepare('SELECT * FROM users WHERE user = ? AND password=?');
     $stmt->execute([$user, $password]);
     $user = $stmt->fetch();

     foreach ($stmt as $row)
     {
        return $row['user'] . "\n";
     }

   }
?>
