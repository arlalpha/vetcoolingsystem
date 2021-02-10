<?php 

error_reporting(0);
session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}

include($config["DATA_PATH"]. 'dbconnector.php'); 
$getaccesscode = "";
$msg1 = "";
$query0 = "SELECT AccessCode FROM tblaccesscode";
$result0 = mysqli_query($connection, $query0);
while($row = mysqli_fetch_array($result0)){
    $getaccesscode = $row["AccessCode"];
}


if(array_key_exists("tbl_access_name",$_POST)){
    $getcode = $_REQUEST["accesscode_name"];
    
    if($getcode == $getaccesscode){
        $_SESSION["access_code"] =  $getaccesscode;
        header("location: ?page=settings");
    
    }else{
        $_SESSION["access_code"] =  null;
       $msg1 = "Invalid Access Code!";
    }
}

mysqli_close($connection);
