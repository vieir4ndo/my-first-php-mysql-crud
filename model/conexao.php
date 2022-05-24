<?php

$servername = "localhost";
$username = "root";
$password = "";
$banco = "teste1";

// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
echo "Connected successfully";
}
?>