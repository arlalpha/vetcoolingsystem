<?php 

error_reporting(0);
session_start();

if($_SESSION["user_active"] == "admin_true"){
    header("location: ?page=admin");
}

include($config["DATA_PATH"]. 'dbconnector.php'); 

$validateAccount = '';
$getUserId = '';

$_SESSION["loginOption"] = $_SESSION["loginOption"];

//login
if(array_key_exists("submit_login",$_POST)){
    
    $getUsername = mysqli_real_escape_string($connection, $_REQUEST["username_login"]);
    $getPassword = mysqli_real_escape_string($connection, $_REQUEST["password_login"]);
    $getLoginOption = mysqli_real_escape_string($connection, $_REQUEST["login_option"]);


    switch($getLoginOption){

        //Admin Login
        case 'Admin':
            $_SESSION["loginOption"] = "Admin";
            $query = " SELECT Username,Password FROM tbladminaccount WHERE Username='$getUsername' AND Password='$getPassword' ";
            $result = mysqli_query($connection, $query);
            $validate = mysqli_num_rows($result);

            $qq = "SELECT Id FROM tbladminaccount WHERE Username='$getUsername' AND Password='$getPassword'";
            $res = mysqli_query($connection, $qq);
            if($validate == 1){

                //get user ID
              
                while($row = mysqli_fetch_array($res)){
                    $getUserId = $row["Id"];
                }


                $_SESSION["user_active"] = "admin_true";
                $_SESSION["user_ID"] =  $getUserId;
                $_SESSION["access_code"] = null;
                header("location: ?page=admin"); 
            
            } else { 
                
                $validateAccount =  "Invalid Account!";
                $getUserId = '';

            
            }
            
          

        break;

        case 'Employee':

            $_SESSION["loginOption"] = "Employee";

        break;


        default:

        break;


    }
    
    

}

mysqli_close($connection);
