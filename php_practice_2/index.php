<!--  <?php
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

     <form action="index.php" method="post">
         <label>Username: </label>
         <input type="text" name="username"><br>
         <label>Password: </label>
         <input type="password" name="password"><br>
         <input type="submit" name="login" value="Login">
     </form>
     This is the login page<br>
     <a href="home.php">This goes to the home page</a>

 </body>

 </html>
 <?php

    if (isset($_POST["login"])) {

        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            /*  echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"]."<br>"; */
            header("Location: home.php");
            exit();
        } else {
            echo "Please enter username and password";
        }
    }

    /* echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"]."<br>"; */
    ?> -->
<!--     <?php

            foreach ($_SERVER as $key => $value) {
                echo $key . "=>" . $value . "<br>";
            }

            ?> -->











<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        Username:<br>
        <input type="text" name=username><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html> -->




<!-- //password Hashing -->



<!-- <?php
        $password = "Pizza123";
        $hash = password_hash($password, PASSWORD_DEFAULT);
        if (password_verify("Pizza1234", $hash)) {
            echo "You are logged in";
        } else {
            echo "Incorrect Password";
        }
        ?> -->



<!-- 
//Database learning -->

<?php
include("database.php");

$sql = "INSERT INTO users (username, password) VALUES ('Rigan', 'rigan123')";
try {
    if (mysqli_query($conn, $sql)) {
        echo "User is now registered";
    } else {
        throw new Exception("Error: " . mysqli_error($conn));
    }
} catch (Exception $e) {
    echo "Error registering user: " . $e->getMessage();
}

mysqli_close($conn);
?>