<?php 

//error_reporting(0);
session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}

include($config["DATA_PATH"]. 'dbconnector.php'); 



$getaccesscode = "";
$query0 = "SELECT AccessCode FROM tblaccesscode";
$result0 = mysqli_query($connection, $query0);
$query1 = "SELECT * FROM tblcustomerdata";
$result1 = mysqli_query($connection, $query1);
$query2 = "SELECT * FROM tbladminaccount";
$result2 = mysqli_query($connection, $query2);


while($row = mysqli_fetch_array($result0)){
    $getaccesscode = $row["AccessCode"];
}
if($_SESSION["access_code"] != $getaccesscode){
    header("location: ?page=admin");
}


if(array_key_exists("btn_fetch",$_POST)){


    $getdata = $_REQUEST = $_REQUEST["data_fetch_name"];

    $_SESSION["database_fetch"] = $getdata;

}









mysqli_close($connection);


?>