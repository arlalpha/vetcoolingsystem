function submitnow() {

    document.getElementById('form-submit').hidden = true;
    document.getElementById('popup-form').hidden = false;


}



function cancelnow() {

    document.getElementById('form-submit').hidden = false;
    document.getElementById('popup-form').hidden = true;

}

function popupmsg1() {

    document.getElementById('form-submit').hidden = true;
    document.getElementById('popup-form').hidden = true;
    document.getElementById('popupmsg1').hidden = false;

}