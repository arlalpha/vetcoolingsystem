<?php 

$connection = new mysqli("localhost","SMGjE414dN","fgW0PWZeE3","SMGjE414dN");

$query = "SELECT * FROM tblaccount WHERE id=1";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){
 
 echo $row["AccountName"];
 
 
}




mysqli_close($connection);


?>
