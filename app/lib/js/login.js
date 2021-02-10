
function getLoginOption() {

    var getVal = document.getElementById('txt_login_option').value;

    if (getVal == null) {
        document.getElementById('txtlogin_option').value = "Admin";

    }
    document.getElementById('txtlogin_option').value = getVal;




}