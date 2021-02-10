<?php 

include($config["DATA_PATH"]. 'dbcontext.php');



$connection = new mysqli($dbCon->getHost(), $dbCon->getUsername(),$dbCon->getPassword(),$dbCon->getDatabase());
if(mysqli_connect_errno()){

    header("location: ?page=server_error");
}

?>