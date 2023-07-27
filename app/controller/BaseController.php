
<?php


class BaseController
{

  public function loadview($name, $data)
  {
    extract($data);
    require sprintf('%s\views\%s.php', dirname(dirname(__FILE__)), $name);
  }

  public function loadModel($name)
  {
    require sprintf('%s\model\%sModel.php', dirname(dirname(__FILE__)), ucfirst($name));
    $modelInstance = ucfirst($name) . 'Model';
    return (new $modelInstance());
  }
}
