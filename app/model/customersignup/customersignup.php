<?php 
//error_reporting(0);
session_start();

require_once $config["DATA_PATH"]. 'dbconnector.php'; 



$query0 = "SELECT * FROM tblcustomeraccount";
$result0 = mysqli_query($connection,$query0);

$msg1 = "";
$loadHtml = "";

if($_SESSION["fwrd"] == "True"){

    $loadHtml = ' 
           
    <script>

document.getElementById("div_userinfo").hidden = true;

</script>

    <div id="div_sendcode">
         

    <form>
        <h1 class="txt-A2">Phone Number</h1>
        <p id="numberautherr" style="color:red;font-family:arial;font-size:4mm;"></p>
        <p style="color:red;font-family:arial;font-size:4mm;"></p>
        <p class="txt-AX">+639 <span> <input class="input-AX" type="text" id="number" value="'. $_SESSION["pnumber"].'" disabled></span></p>
        <div id="recaptcha-container"></div>
        <br>
        <button type="button" class="button-A1" onclick="phoneAuth();">Send Code</button>
        <br><br>
       
    </form>
    <form action="?page=customersignup" method="post">
    <input type="submit" class="button-A1" name="prvs" value="Previous" />
    </form>
    <br>

</div>';

}else{

echo '

<script>

document.getElementById("div_userinfo").hidden = false;
document.getElementById("div_sendcode").hidden = true;

</script>




';

}


if(array_key_exists("btn_signup",$_POST)){
    $_SESSION["cname"] = $_REQUEST["txtCustomerName"];
    $_SESSION["uname"] = $_REQUEST["txtUsername"];
    $_SESSION["pswrd"] = $_REQUEST["txtPassword"];
    $_SESSION["cpswrd"] = $_REQUEST["txtConfirmPassword"];
    $_SESSION["pnumber"] = $_REQUEST["number"];


    while($row = mysqli_fetch_array($result0)){
        if($row["Username"] == $_SESSION["uname"]){
            $_SESSION["message1"] = "Username is already taken!";
            $_SESSION["fwrd"] = "False";

        } elseif($row["ContactNumber"] == "+639".$_SESSION["pnumber"]){

            $_SESSION["message1"] = "Phone Number is already taken!";
            $_SESSION["fwrd"] = "False";

        }elseif($_SESSION["pswrd"] != $_SESSION["cpswrd"]){

            $_SESSION["message1"] = "Password Not Matched";
            $_SESSION["fwrd"] = "False";
        }else{

           $_SESSION["fwrd"] = "True";
           $_SESSION["message1"] = "";

        }
    }

    header("location: ?page=customersignup");


}

if(array_key_exists("prvs",$_POST)){


    $_SESSION["fwrd"] = "False";
    $_SESSION["message1"] = "";
    header("location: ?page=customersignup");


}






mysqli_close($connection);
?>