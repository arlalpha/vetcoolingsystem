<?php 
//error_reporting(0);
session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}
$getconnectionstatus = '';
require_once $config["DATA_PATH"]. 'dbconnector.php'; 

// validate access code
$query0 = "SELECT AccessCode FROM tblaccesscode";
$result0 = mysqli_query($connection, $query0);



if(array_key_exists("btn_deactivateCpanel",$_POST)){
    $_SESSION["access_code"] = null;
}
$getUserID = $_SESSION["user_ID"];
$query1 = "SELECT AccountName FROM tbladminaccount WHERE Id='$getUserID'";
$result1 = mysqli_query($connection,$query1);
$getAccountName = '';
while($row = mysqli_fetch_array($result1)){

    $getAccountName = $row["AccountName"];
}

mysqli_close($connection);

?>