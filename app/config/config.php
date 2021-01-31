<?php 

$config = [
    "MODEL_PATH" => APPLICATION_PATH . DS . "model" . DS,
    "VIEW_PATH" => APPLICATION_PATH . DS . "view" . DS,
    "LIB_PATH" => APPLICATION_PATH . DS . "lib" . DS,
    "IMG_PATH" => "/app" . DS . "img" . DS,
    "LIBZ_PATH" => "/app" . DS . "lib" . DS,

];


function get($name, $def = ''){
    return isset($_REQUEST[$name]) ? $_REQUEST[$name]: $def;

}


?>

