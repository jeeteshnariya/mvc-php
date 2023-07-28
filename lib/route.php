<?php

require 'helper.php';

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home/index';

list($controller, $action) = explode('/', $page);



$controller = ucfirst($controller) . 'Controller';


require sprintf("%s\app\controller\%s.php ", dirname(dirname(__FILE__)), $controller);


// $controllerInstance = new HomeController();
// $controllerInstance->index();

$controllerInstance  = new $controller();
$controllerInstance->{$action}();
