<?php

function dir_path()
{
  return dirname(dirname(__FILE__));
}

function set_url($link){
  $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]?url=".$link;
  return $actual_link;
}


function view($name = '404')
{
  $view_path = '\\app\views\\' . $name . '.php';
  require dir_path() . $view_path;
}

function model($name = 'welcome')
{
  $name = ucfirst($name);
  $view_path = "\app\model\\{$name}Model.php";
  return dir_path() . $view_path;
}
 