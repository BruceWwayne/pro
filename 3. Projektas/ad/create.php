<?php
require_once("../api/connection/connect.php");
$stmt= $conn->prepare("INSERT INTO bikes(type, brand, model, year, cc, price, date) VALUES('enduro', 'KTM', 'SX-f', 2018, 450, 2500,NOW())");
/*$stmt->bind_param(
  "sss",    // datai : i, skaiciams : d
  $name,
  $description,
  $date);

  $name=$_POST["name"];   //is ivesto vardo perdave i Duomenu baze
  $description=$_POST["description"];
  $date=$_POST["date"];
  if($stmt->execute()){
    header("Location: /calendar.php");
  }else{
    echo $stmt->error;
  }
require_once("../connection/disconnect.php");
*/
if($stmt->execute()){
//  header("Location: /calendar.php");
}else{

  echo $stmt->error;

}

 ?>
