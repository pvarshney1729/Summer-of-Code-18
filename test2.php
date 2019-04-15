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

$name = $_POST['NAME'];
$password = $_POST['PASSWORD'];
$email = $_POST['EMAIL'];
$phoneno = $_POST['PHONENO'];
$gender = $_POST['gender'];

$check = "SELECT * FROM user WHERE email='$email'";

if($result=mysqli_query($conn,$check))
   {
     if(mysqli_num_rows($result) > 0){
       echo "<html><body align=center><br><br><h1>User already exists</h1></body></html>";
     }
     else{
       $sql = "INSERT INTO user (username,password,gender,email,phone) VALUES('$name','$password','$gender','$email','$phoneno')";

       if($conn->query($sql)===TRUE){
           echo "<html><body align=center><br><br><h1>You have been successfully registered</h1></body></html>";
        }else{
            echo "failed";
         }

     }

   }
}


$conn->close();

?>
