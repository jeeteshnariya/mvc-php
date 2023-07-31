
<?php


class BaseController
{

  public function index(){
     view('404');
  }

  public function loadview($name, $data)
  {
    extract($data);
    require view($name);
  }

  public function loadModel($name)
  {
    require model($name);
    $modelInstance = ucfirst($name) . 'Model';
    return (new $modelInstance());
  }
}
