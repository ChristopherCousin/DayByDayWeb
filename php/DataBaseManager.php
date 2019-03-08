<?php
session_start();
if(isset($_POST) && isset($_POST["username"]) )
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
  }

  function addImageToDB($name, $extension, $version, $path)
  {
    include ("config.php");
        // Prepare
        $stmt = $dbh->prepare("INSERT INTO file(name,extension,version,link)
        values(?,?,?,?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $extension);
        $stmt->bindParam(3, $version);
        $stmt->bindParam(4, $path);

        // Excecute
      if($stmt->execute()){
        echo "added";
      }
  }

  function md5encryptName() {
    $s = strtoupper(md5(uniqid(rand(),true)));
    $guidText =
        substr($s,0,8) . '-' .
        substr($s,8,4) . '-' .
        substr($s,12,4). '-' .
        substr($s,16,4). '-' .
        substr($s,20);
    return $guidText;
}


?>
