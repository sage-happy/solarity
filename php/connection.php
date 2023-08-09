<?php
   
    // $dbname="postgres";
    // $hostname= "localhost";
    // $port="5433";
    // $username="postgres";
    // $password= "solarimspost123";

    $conn=pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=solarimspost123");
    //exception handling
    if(!$conn){
        echo "Failed to connected";
        exit;
    }
 
        
  
?>
