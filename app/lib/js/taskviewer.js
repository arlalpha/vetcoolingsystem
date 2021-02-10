function validateTask() {


    if (document.getElementById("checkb1").checked) {

        document.getElementById("checkb2").disabled = true;
        document.getElementById("input3").value = "M1";
        document.getElementById("commit").hidden = false;
    } else if (document.getElementById("checkb2").checked) {
        document.getElementById("checkb1").disabled = true;
        document.getElementById("input3").value = "M2";
        document.getElementById("commit").hidden = false;
    } else {
        document.getElementById("commit").hidden = true;
        document.getElementById("checkb1").disabled = false;
        document.getElementById("checkb2").disabled = false;
        document.getElementById("input3").value = "";
    }




}