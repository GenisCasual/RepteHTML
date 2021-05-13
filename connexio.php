<?php
$servername = "localhost";
$database = "receta";
$username = "sa";
$password = "1w2e3s4d";

$conn = new mysqli($servername,$username,$password,$database);

if($conn -> connect_error) {
    die("Connecion Failed: " . $conn->connect_error);
}

?>