<?php
session_start();
if(isset($_POST))
{
 login($_POST["username"], $_POST["password"]);
}


  function login($user, $password2)
  {
    $URL1 = "../index.php";
    include ("config.php");
        // Prepare
        $stmt = $dbh->prepare("SELECT * FROM users WHERE username = ? AND password=?");

        $stmt->bindParam(1, $user);
        $stmt->bindParam(2, $password2);

        // Excecute
        $stmt->execute();

        $result = $stmt->fetchColumn();

        if ($result > 0)
        {
          $_SESSION["Login"]=true;
          header('Location: '.$URL1);
        } else {
          $_SESSION["Login"]=false;
        }
        /*while($row = $stmt->fetch(PDO::FETCH_OBJ))
        {
          echo "user: " . $row->username . "<br>";
          echo "pass: " . $row->password . "<br>";
        }*/
  }

?>
