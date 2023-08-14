<?php


function view($name = 'welcome', $data = null)
{
  // var_dump($data);
  extract($data);
  include_once sprintf('%s\app\views\%s.php', __DIR__, $name);
}

function model($model_name)
{

  include_once sprintf('%s\app\model\%s.php', __DIR__, $model_name);
  return new $model_name();
}




function set_url($link)
{
  $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]?url=" . $link;
  return $actual_link;
}

function dd($data = null)
{
  echo '<pre class="bg-gray-100 text-sm border rounded m-48 p-4 text-red-700">';
  var_export($data);
  echo '</pre>';
}
