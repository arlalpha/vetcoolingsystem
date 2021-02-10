<?php 

session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}

require_once $config["DATA_PATH"]. 'dbconnector.php'; 


$query1 = "SELECT * FROM tblcustomerdata";
$result1 = mysqli_query($connection,$query1);
$result2 = mysqli_query($connection,$query1);
$countTask = 0;


if(array_key_exists("btn_view_task",$_POST)){
    $getId = $_REQUEST["input2"];
    $_SESSION["task_Id_tr"] = "false";
    $_SESSION["task_Id"] = $getId;
    header("location: ?page=taskviewer");
}




mysqli_close($connection);

?>