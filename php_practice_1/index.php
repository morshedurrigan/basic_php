<!-- <?php
        echo "I love Pizza<br>";
        echo "It's Really Good";

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order Pizza</button>
    
</body>
</html> -->

<!-- <?php
        $name = "Morshedur Rigan Sagar";
        $food = "Pizza";
        $email = "morshedurrigansagar@gmail.com";

        $age = 21;

        $gpa = 3.5;
        $price = 5.99;
        $tax_rate = 0.08;

        $employed = true;
        $online = false;
        $for_sale = true;


        echo "My name is {$name}.<br>";
        echo "My favorite food is {$food}.<br>";
        echo "My email address is $email.<br>";

        echo "My age is $age.<br>";
        echo "My GPA is $gpa.<br>";
        echo "The price is \$$price.<br>";
        echo "The tax rate is $tax_rate%.<br>";


        echo "Employed Status: $employed.<br>";
        echo "Online Status: $online <br>";
        echo "For Sale Status: $for_sale.<br>";

        $quantity = 5;
        $total = null;
        echo "You have ordered $quantity X {$food}s.<br>";
        $total = $quantity * $price;
        echo "Your total is \$$total.<br>";
        ?> -->



<!-- <?php
        //Arithmetic Operators
        $x = 10;
        $y = 3;
        $z = null;
        $z = $x + $y;
        $z = $x - $y;
        $z = $x ** $y;
        echo $z;


        ?>  -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login"><br>
</body>
</html>
<?php
echo "{$_POST["username"]}<br>";
echo "{$_POST["password"]}<br>";
?> -->





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Quantity: </label><br>
        <input type="text" name="Quantity">
        <input type="submit" value="Total">
    </form>
    
</body>
</html>
<?php
$item = "Pizza";
$price = 5.99;
$quantity = $_GET["Quantity"];
$total = null;

$total = $price * $quantity;

echo "You have ordered $quantity {$item}s<br>";
echo "Your total is: \$$total.<br>";
?> -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>X: </label>
        <input type="text" name="x"><br>
        <label>Y: </label>
        <input type="text" name="y"><br>
        <label>Z: </label>
        <input type="text" name="z"><br>
        <input type="submit" Value="Calculate">

    </form>

    
</body>
</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];


$add = $x + $y + $z;
$mul = $x * $y * $z;
echo "The Add result is: $add<br>";
echo "The Multiply result is: $mul<br>";
echo "The Average result is: " . ($add / 3) . "<br>";
echo "The minimum Result is: " . min($x, $y, $z) . "<br>";

?> -->



<!-- <?php
        $date = date("Y-m-d");
        $day = date("l");

        // echo "Today's date is: $date<br>";
        echo "Today is: $day<br>";
        switch ($day) {
            case "Tuesday":
                echo "I hate Tuesday<br>";
                break;
            case "Wednesday":
                echo "I hate Wednesday<br>";
                break;
            default:
                echo "I love all other days<br>";
                break;
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
    <form action="index.php" method="post">
        <label>Enter a number to count to: <br></label>
        <input type="text" name="count"><br>
        <input type="submit" value="Start Counting">

    </form>
</body>
</html>
<?php
$count = $_POST["count"];

for ($i = 0; $i <= $count; $i++) {
    echo "$i<br>";
}

?> -->




<!-- <?php
        $foods = array("Pizza", "Burger", "Pasta", "Fries", "Salad");
        $foods[0] = "PineApple";
        foreach ($foods as $food) {
            echo "$food<br>";
        }
        echo "<br>"; // Corrected line
        array_push($foods, "Ice Cream", "Candy");
        foreach ($foods as $food) {
            echo "$food<br>";
        }
        array_pop($foods); // Remove the last element
        array_shift($foods); // Remove the first element
        echo "<br>"; // Corrected line
        $reversed_food = array_reverse($foods);
        foreach ($reversed_food as $food) {
            echo "$food<br>";
        }
        echo "<br>"; // Corrected line



        //Associative Array
        $capitals = array("Bangladesh" => "Dhaka", "India" => "New Delhi", "USA" => "Washington DC");
        echo $capitals["Bangladesh"] . "<br>";
        foreach ($capitals as $key => $value) {
            echo "The capital of $key is $value<br>";
        }
        //Modify the value
        $capitals["Bangladesh"] = "Dhaka City";
        echo $capitals["Bangladesh"] . "<br>";

        $capitals["Pakistan"] = "Islamabad";
        echo $capitals["Pakistan"] . "<br>";
        array_pop($capitals);
        foreach ($capitals as $key => $value) {
            echo "The capital of $key is $value<br>";
        }
        $keys = array_keys($capitals);
        $values = array_values($capitals);
        foreach ($keys as $key) {
            echo "$key<br>";
        }
        echo "<br>"; // Corrected line
        foreach ($values as $value) {
            echo "$value<br>";
        }
        //arrayflip use
        $capitals = array_flip($capitals);
        foreach ($capitals as $key => $value) {
            echo "The capital is $key of $value<br>";
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
    <form action="index.php" method="post">
       <label>Enter a Country Name: </label><br> 
       <input type="text" name="country"><br>
       <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$capitals = array("Bangladesh" => "Dhaka", "India" => "New Delhi", "USA" => "Washington DC");
$country = $_POST["country"]; // Define the $country variable
if (array_key_exists($country, $capitals)) {
    $capital = $capitals[$country]; // Correctly access the capital from the array
    echo "The capital of $country is $capital<br>";
} else {
    echo "Country not found.<br>";
}
?> -->


<!-- <?php
        $username = "Bro code";
        if (empty($username)) {
            echo "This Variable is empty<br>";
        } else {
            echo "This Variable is not empty<br>";
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
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="Login" value="Login">
    </form>
    
</body>
</html>
<?php
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username)) {
        echo "Username is missing<br>";
    } elseif (empty($password)) {
        echo "Password is missing<br>";
    } else {
        echo "Welcome $username<br>";
    }
}
?> -->

<!-- Radiobutton on php -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" value="Visa" name="card">Visa<br>
        <input type="radio" value="Mastercard" name="card">Mastercard<br>
        <input type="radio" value="American Express" name="card">American Express<br>
        <input type="submit" name="confirm" value="Confirm"> 
    </form>
    
</body>
</html>
<?php
if (isset($_POST["confirm"])) {

    if (isset($_POST["card"])) {
        $credit_card = $_POST["card"];
        echo "You have selected $credit_card<br>";
    } else {
        echo "Please select a card<br>";
    }
}



?> -->




<!-- Use of checkobox in php -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="index.php" method="post">
            <input type="checkbox"name="pizza" value="Pizza">Pizza<br>
            <input type="checkbox"name="burger" value="Burger">Burger<br>
            <input type="checkbox"name="sandwitch" value="Sandwitch">Sandwitch<br>
            <input type="submit" name="submit" value="Order Now">

     </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "You have selected Pizza<br>";
    }
    if (isset($_POST["burger"])) {
        echo "You have selected Burger<br>";
    }
    if (isset($_POST["sandwitch"])) {
        echo "You have selected Sandwitch<br>";
    }
}


?> -->




<!-- Function use in php -->

<!-- <?php

        function hypotaneous($a, $b)
        {
            $c = sqrt($a * $a + $b * $b);
            return $c;
        }
        echo hypotaneous(3, 4) . "<br>";
        ?> -->


<!-- String manipulation in php -->
<!-- <?php

$username = "bro code";
$phone = 123 - 456 - 7890;

//$username= strtoupper($username);
// $username= strtolower($username);
//  $username= ucfirst($username);//First letter capital
// $username=trim($username);//Remove the white space
// $username= str_replace("bro", "BRO", $username);
// $username=strrev($username);
//$equals = strcmp("Bro code", "bro code");
//echo $equals . "<br>";



//echo $username . "<br>";

/* $count= strlen($username);   
echo $count . "<br>";   */


/* $fullname = explode(" ", $username);
foreach ($fullname as $name) {
    echo $name . "<br>";
} */


//implode is opposite to explode


?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Enter your username: </label><br>
    <input type="text" name="username"><br>
      
    <label>Enter your age: </label><br>
    <input type="text" name="age"><br> 

    <label>Enter your email: </label><br>
    <input type="text" name="email"><br>
    <input type="submit" name="submit" value="login">



    </form>
    
</body>
</html>
<?php

   if(isset($_POST["submit"])){
       /* $username=$_POST["username"];
       echo "Welcome $username<br>";  */
      /*  $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
       $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
       $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

       echo "Welcome $username<br>";
       echo "Your age is $age<br>"; 
       echo "Your email is $email<br>"; */
       $age=filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
       $email=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
       if(empty($age)){
           echo "Age is missing<br>";
       }else{
           echo "Your age is $age<br>";
       }
       if(empty($email)){
           echo "You Entered an Invalid email...<br>"; 
         }else{ 
             echo "Your email is $email<br>";
         }

   }
?> -->

<!-- Associate with about,location and header and footer the following line -->


<!--  <?php
  include "header.html";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page<br>
    Stuff about your home page can go here<br>


</body>
</html>
<?php
  include "footer.html";

?>
  -->

<!--  setcookies -->


