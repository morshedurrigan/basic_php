<!-- <?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      This is the Home page<br>
      
      <form action="home.php" method="post">
      <input type="submit" name="logout" value="Logout"><br>

    
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        //session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
   echo $_SESSION["username"] . "<br>";
   echo $_SESSION["password"]."<br>";
?> -->