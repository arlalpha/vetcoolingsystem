<?php 

$connection = new mysqli("localhost","SMGjE414dN","fgW0PWZeE3","SMGjE414dN");

$query = "SELECT * FROM tblaccount WHERE id=1";

$result = mysqli_query($connection,$query);

$getrow = mysqli_num_rows($result);

echo $getrow;




mysqli_close($connection);


?>
