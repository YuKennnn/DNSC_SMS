<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function getDBConnection(){
    $conn = new mysqli("127.0.0.1", "root", "", "dsms", 3306 );

    if ($conn->connect_error){
        die("Connection error:" . $conn->connect_error);
    }else{
        // echo "You are now connected!";
        
    }

    return $conn;
    
    
}

?>