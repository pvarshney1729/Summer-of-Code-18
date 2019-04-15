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
  $check = "SELECT * FROM comm";

  if($result=mysqli_query($conn,$check))
     {
       if(mysqli_num_rows($result) > 0)
       {
         echo "<center><h1>complaint table</h1></center>";
         echo "<table border=\"2\" align=\"center\">
         <th>lattitude</th>
         <th>longitude</th>
         <th>email</th>
         <th>complaint</th>";
         while($row=mysqli_fetch_array($result)){ $image=$row["img"];
         echo "<tr><td align=\"center\">".$row["lattitude"]."</td>
                   <td align=\"center\">".$row["longitude"]."</td>
                   <td align=\"center\">".$row["emailid"]."</td>
                   <td align=\"center\">".$row["comp"]."</td></tr>";}

         echo "</table>";
       }
       else
       {
         echo "wrong email or password";
       }
     }
}
$conn->close();

?>
