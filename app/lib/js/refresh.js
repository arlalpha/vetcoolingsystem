function refresh() {

    document.getElementById("refreshGIF").hidden = false;
    setTimeout(close, 2000);


}


function close() {

    document.getElementById("refreshGIF").hidden = true;

    location.reload();
}