<?php




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

function redirect($link)
{
  header('Location:' . set_url($link),false);
  // exit;
}

function dd($data = null)
{
  echo '<pre class="bg-gray-100 text-sm border rounded mx-32 p-4 text-red-700">';
  print_r($data);
  // var_export($data);
  echo '</pre>';
}

 

function render($viewName,$data = [], $layout = '{{child}}'){
  $content = load_view($viewName, $data);

  if($layout !== '{{child}}') {
    $layout = load_view($layout);
  }

 

  echo str_replace('{{child}}',   $content, $layout);
}


function load_view($file_path, $data=[])
{
  $viewPath = sprintf('%s\app\views\%s.php', __DIR__, $file_path);

  extract($data);
  ob_start();
  include_once $viewPath;
  return  ob_get_clean();
}


 