<?php

$user = 'root';
$password = 'root';
$db = 'signup';
$host = 'localhost';
$port = 3306;

$conn = new mysqli($host,$user,$password,$db);

if($conn->connection_error)
{
    die($conn->connection_error);
}

if($conn)
{
  session_start();
  $password = $_POST['PASSWORD'];
  $email = $_POST['EMAIL'];

  $check = "SELECT * FROM user WHERE email='$email' AND password='$password'";

  if($result=mysqli_query($conn,$check))
     {
       if(mysqli_num_rows($result) > 0)
       {
         $uid = "SELECT ID FROM user WHERE email='$email' AND password='$password'";
         $_SESSSION["id"]=$uid;
         echo "<html><body align=center><br><h1>Welcome !!!</h1></body></html>"."<br>";
         echo "<a href=\"user.html\">Enter</a><br />";
       }
       else
       {
         echo "<html><body align=center><br><br><h1>You have entered wrong email or password</h1></body></html>";
       }
     }
}
$conn->close();

?>
