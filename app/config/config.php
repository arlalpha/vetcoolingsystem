<?php 

$config = [

    //this is for localhost
    'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,
    'VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS, 
    'DATA_PATH' => APPLICATION_PATH . DS . 'data' . DS, 
    'LIB_PATH' => '/app'. DS . 'lib' . DS,
    'IMG_PATH' => '/app'. DS . 'img' . DS,
    'AU_PATH' => '/app'. '/' . 'autoupdate' . '/',

    

];

function get($name, $def = ''){

    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}

?>
