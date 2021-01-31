<?php 

 define("APPLICATION_PATH",realpath(dirname(__FILE__).'/../app'));

const DS = DIRECTORY_SEPARATOR;

require APPLICATION_PATH. DS . "config" . DS . "config.php";


$page = get("page","home");

$model = $config["MODEL_PATH"]. $page . DS . $page . ".php";
$view = $config["VIEW_PATH"]. $page . DS . $page . ".phtml";
$_404 = $config["VIEW_PATH"]. "_404" . DS . "_404" . ".phtml";
if(file_exists($model)){
     
    require $model;
}
if(file_exists($view)){

    require $view;

}else{

    require $_404;
}


?>