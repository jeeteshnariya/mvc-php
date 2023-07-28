<?php
include_once 'helper.php';
// if $GET url param in link like index.php?url=abc@def@123 or abc/def/123
// if page link index.php then 404

$url = (isset($_GET['url'])) ? $_GET['url'] : 'base/index';

$urlparmas = explode('/', $url);

$controller = ucfirst($urlparmas[0]) . 'Controller';
$method = isset($urlparmas[1]) ? $urlparmas[1] : 'index';
$params = array_slice($urlparmas, 2);


$path = dir_path() . "\app\controller\\{$controller}.php";

if (!file_exists($path)) {
  echo "File does not exist";
  exit;
}

require $path;



$controller_object = new $controller();    //new HomeController();

call_user_func_array(array($controller_object, $method), $params);
