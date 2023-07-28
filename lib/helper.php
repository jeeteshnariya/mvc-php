<?php

function dir_path(){
  return dirname(dirname(__FILE__));
}


function view($name ='welcome'){
  $view_path ='\\app\views\\'.$name.'.php';
  return dir_path() . $view_path;
}

function model($name = 'welcome')
{
  $name = ucfirst($name);
  $view_path = "\app\model\\{$name}Model.php";
  return dir_path() . $view_path;
}

 