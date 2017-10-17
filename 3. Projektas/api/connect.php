<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test2";

$conn = new mysqli($servername, $username, $password, $dbname);
// atliekam prisijungimo patikrinima
if($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}
 ?>
