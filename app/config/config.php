<?php 

$config = [

    //this is for localhost
    'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,
    'VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS, 
    'DATA_PATH' => APPLICATION_PATH . DS . 'data' . DS, 
    'LIB_PATH' => '/vetcoolingsystem/app'. DS . 'lib' . DS,
    'IMG_PATH' => '/vetcoolingsystem/app'. DS . 'img' . DS,
    'AU_PATH' => '/vetcoolingsystem/app'. '/' . 'autoupdate' . '/',

    

];

function get($name, $def = ''){

    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}

?>