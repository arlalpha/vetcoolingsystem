<?php 

session_start();
date_default_timezone_get();

$getcurrentdate = date('Y/m/d');
$getday = date('d');
$getmonth = date('m');
$getyear = date('Y');

include($config["DATA_PATH"]. 'dbconnector.php'); 
$_SESSION["cname"] = "";
$_SESSION["uname"] = "";
$_SESSION["pswrd"] = "";
$_SESSION["cpswrd"] = "";
$_SESSION["pnumber"] = "";
$_SESSION["fwrd"] = "False";
$_SESSION["message1"] = "";
$succ = 'false';
if(array_key_exists("btn_submit",$_POST)){

    $getCustomerName = mysqli_real_escape_string($connection,$_REQUEST["customername_submit"]);
    $getAddress = $_REQUEST["address_submit"];
    $getContactNo = mysqli_real_escape_string($connection,$_REQUEST["contactno_submit"]);
    $getProblemSpec = $_REQUEST["problemspec_submit"];
    $getSchedDate = mysqli_real_escape_string($connection,$_REQUEST["scheddate_submit"]);
    $getSchedTime = mysqli_real_escape_string($connection,$_REQUEST["schedtime_submit"]);

   
    $query = "INSERT INTO `tblcustomerdata`(`Id`, `CustomerName`, `Address`, `ContactNumber`, `ProblemSpecification`, `Sched_Date`, `Sched_Time`, `Pending`, `Complete`, `Cancel`) VALUES ('','$getCustomerName','$getAddress','$getContactNo','$getProblemSpec','$getSchedDate','$getSchedTime','True','Fales','False')";
    $result = mysqli_query($connection,$query);

       
    $succ = 'true';


}












mysqli_close($connection);

?>