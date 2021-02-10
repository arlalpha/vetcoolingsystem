<?php 
//error_reporting(0);
session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}
$getconnectionstatus = '';
require_once $config["DATA_PATH"]. 'dbconnector.php'; 

if(mysqli_connect_errno()){
    $getconnectionstatus = 'Not Connected';
}else{
   
    $getconnectionstatus = 'Connected';
}

// validate access code
$query0 = "SELECT AccessCode FROM tblaccesscode";
$result0 = mysqli_query($connection, $query0);

$_SESSION["database_fetch"] = "";
date_default_timezone_get();
$date = date('Y/m/d');
$time = date("H:i:s");

$getUserID = $_SESSION["user_ID"];

$query1 = "SELECT AccountName FROM tbladminaccount WHERE Id='$getUserID'";
$result1 = mysqli_query($connection,$query1);
$getAccountName = '';
while($row = mysqli_fetch_array($result1)){

    $getAccountName = $row["AccountName"];
}

$query_get_db_status = "SELECT table_schema AS 'DBName', ROUND(SUM(data_length + index_length) / 1024 / 1024, 1) AS 'DB_Size_In_MB' FROM information_schema.tables WHERE table_schema = 'vcsdb' GROUP BY table_schema";
$reuslt_db_status = mysqli_query($connection, $query_get_db_status);

//for record tasks
$_SESSION["task_view_by"] = "Completed Tasks";




mysqli_close($connection);

?>