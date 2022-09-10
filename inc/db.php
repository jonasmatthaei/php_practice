<?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "Metis_Database";


$conn = new mysqli($Servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("connect error!");
}
?>
