<?php 

//error_reporting(0);
session_start();

if($_SESSION["user_active"] != "admin_true"){
    header("location: ?page=home");
}

require_once $config["DATA_PATH"]. 'dbconnector.php'; 



$getTaskId = $_SESSION["task_Id"];
$getTaskIdTr = $_SESSION["task_Id_tr"];

$query = "SELECT * FROM tblcustomerdata WHERE Id='$getTaskId'";
$result = mysqli_query($connection,$query);
$query1 = "SELECT * FROM tblcustomerdata WHERE Id='$getTaskId'";
$result1 = mysqli_query($connection,$query1);

$query2 = "SELECT * FROM tblcustomerdata WHERE Id='$getTaskId'";
$result2 = mysqli_query($connection,$query2);





//commit
if(array_key_exists("commit",$_POST)){

$validateInput = $_REQUEST["input3"];

    switch($validateInput){

        //marked as done
        case 'M1':
            $query3 = "UPDATE tblcustomerdata SET `Pending`='False',`Complete`='True',`Cancel`='False' WHERE Id='$getTaskId'";
            $result3 = mysqli_query($connection,$query3);
            header("location: ?page=taskrecord");
        break;

        //marked as cancelled
        case 'M2':
            $query4 = "UPDATE tblcustomerdata SET `Pending`='False',`Complete`='False',`Cancel`='True'  WHERE Id='$getTaskId'";
            $result4 = mysqli_query($connection,$query4);
            header("location: ?page=taskrecord");
            
        break;


        default:

         break;


    }


}




mysqli_close($connection);

?>