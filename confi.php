<?php

$servername = "localhost";
$username = "Sammy"; //"qpslhdsp_api";
$password = "2014414292"; //"q80p80s";
$database = "masterclass";//qpslhdsp_dbforqps";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
    if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully";
}


?>