<?php 

$connection = new mysqli("localhost","SMGjE414dN","fgW0PWZeE3","SMGjE414dN");

if(mysqli_connect_errno()){
 echo "error"; 
}

echo "connected";




mysqli_close($connection);


?>
