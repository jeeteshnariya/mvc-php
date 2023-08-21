<?php
session_start();
include 'config.php';
include 'helper.php';

$mvc_path = __DIR__;


$get_url = (isset($_GET['url'])) ? $_GET['url'] : 'base/index/id/45/77';

if (!str_contains($get_url, '/')) {
  echo 'Please provide a method name after controller like controller /  method name in url';
  exit;
}

$url_parmas = explode('/', $get_url);                 //[ 'base', 'index','id',45,77]

$first_two  = array_slice($url_parmas, 0, 2);    // [ 'base', 'index']
$other_params = array_slice($url_parmas, 2);       // ['id',45,77]

// $controller = $first_two_params[0]; 
// $method = $first_two_params[1];  
// we use list function instead of this
list($controller, $method) = $first_two;  // $controller = 'base' and $method = 'index';



$controller = $controller . 'controller';  // $controller = 'basecontroller';

$filename =  $mvc_path .  "\app\controller\\{$controller}.php";


// if file not found
if (!file_exists($filename)) {
  echo "The file does not exist in path $filename";
  exit;
}

// if file found we load it
require $filename;

// create that file class object and run method
$object = new $controller();  // new basecontroller();
// $object->{$method}($other_params[0], $other_params[1]);   // $object->index($parmas,$second);


call_user_func_array(array($object, $method), $other_params);
