<?php

    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="business_db";
    $conn="";

   try{
    $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);

    if (!$conn) {
        throw new Exception("Error connecting to the database");
    }

   } 
   catch(mysqli_sql_exception $e){
         echo "Could not connect to the database" ."<br>";
   }
   if($conn){
       echo "Connected to the database" ."<br>";
   }
  
    


?>
