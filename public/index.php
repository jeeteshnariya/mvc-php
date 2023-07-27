<?php
// public/index.php

spl_autoload_register(function ($className) {
  $classFile = __DIR__ . '/../app/' . str_replace('\\', '/', $className) . '.php';
  if (file_exists($classFile)) {
    require_once $classFile;
  }
});

$request = $_SERVER['REQUEST_URI'];

// Routing by link
$routes = [
  '/' => 'HomeController@index',
  '/contact' => 'ContactController@index',
];

if (array_key_exists($request, $routes)) {
  $route = $routes[$request];
  [$controllerName, $method] = explode('@', $route);

  $controllerClass = ucfirst($controllerName) . 'Controller';
  $controller = new $controllerClass();
  $controller->$method();
} else {
  // Handle 404 - Not Found
  http_response_code(404);
  echo "404 Not Found";
}


?>