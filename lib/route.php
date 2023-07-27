<?php


list($controller, $action) = explode('/', $_GET['page']);



$controller = ucfirst($controller).'Controller';


require sprintf("%s\app\controller\%s.php ",dirname(dirname(__FILE__)),$controller);


// $controllerInstance = new HomeController();
// $controllerInstance->index();

$controllerInstance  = new $controller();
$controllerInstance->{$action}();