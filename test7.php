<?php

$user = 'root';
$password = 'root';
$db = 'signup';
$host = 'localhost';
$port = 3306;

$conn = new mysqli($host,$user,$password,$db);

if($conn->connection_error){
    die($conn->connection_error);
}

if($conn){

  $lat = $_POST['LAT'];
  $lon = $_POST['LON'];
  $email = $_POST['EMAIL'];
  $com = $_POST['COM'];

       $sql = "INSERT INTO comm (lattitude,longitude,emailid,comp) VALUES('$lat','$lon','$email','$com')";

       if($conn->query($sql)===TRUE){
           echo "<html><body align=center><br><br><h1>You have been successfully registered your complaint.</h1></body></html>";
        }else{
            echo "failed";
         }
}


$conn->close();

?>
