<?php
//Creating the connection to the database(W3Schools,2023)
session_start();

$servername = "missouri.aserv.co.za";
$user_name = "justlykc_Roberto";
$password = "Justlove2024!";
$dbname = "justlykc_justloveplayandlearncentre";

//Create connection(W3Schools,2023)
$conn = new mysqli($servername, $user_name, $password, $dbname);

//Check connection(W3Schools,2023)
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully <br>";

?>