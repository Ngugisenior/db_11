<?php
error_reporting(E_ALL);

 class DB_CONNECT{
     // constructor
     function __construct(){
         //connecting to the database
         $this->conn = $this->connect();
     }

     /*// Destructor
     function __destruct(){
        $this->close();
     }*/

     // Function to connect to the database
     function connect(){
         //import database connection variables
         require_once __DIR__.'/db_config.php';

         //connecting to mysql database
         $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die("Unable to connect ->".mysqli_error());

         // Selecting database
         $db = mysqli_select_db($conn,DB_DATABASE) or die(mysqli_error()) or die(mysqli_error());
         
         // Returning the connection cursor
         return $conn;
     }


         // closing thhe db
 }
?>