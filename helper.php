<?php


function view($name = 'welcome', $data = null)
{
  // var_dump($data);
  if (!is_null($data)) {

    extract($data);
  }
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

function redirect($link)
{
  header('Location:' . set_url($link));
}

function dd($data = null)
{
  echo '<pre class="bg-gray-100 text-sm border rounded mx-32 p-4 text-red-700">';
  print_r($data);
  // var_export($data);
  echo '</pre>';
}


function renderView($viewName, $data = [], $layout = null)
{
  $viewPath = sprintf('%s\app\views\%s.php', __DIR__, $viewName);

  if ($layout !== null) {
    $layoutPath = sprintf('%s\app\views\%s.php', __DIR__, $layout);

    if (file_exists($layoutPath)) {
      extract($data);

      // Start capturing the output into a buffer
      ob_start();
      include $viewPath; // Include the view file
      $content = ob_get_clean(); // Capture the buffered content and clear the buffer

      // Start capturing the output again for the layout
      ob_start();
      include $layoutPath; // Include the layout file
      echo str_replace('{{children}}', $content, ob_get_clean()); // Replace placeholder with content and output
    } else {
      throw new Exception("Layout file not found: $layoutPath");
    }
  } else {
    extract($data);

    // Start capturing the output into a buffer
    ob_start();
    include $viewPath; // Include the view file
    echo ob_get_clean(); // Output the captured content and clear the buffer
  }
}
