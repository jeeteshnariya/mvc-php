<?php
include_once  'BaseController.php';

class UsersController extends BaseController
{
  public $users_model;

  public function __construct()
  {
    $this->users_model =  $this->loadModel('users');
  }


  public function index()
  {
   
    $users = $this->users_model->getUsers();
    $id = 545500;
    $msg = 'helloworld users table';

    $this->loadview('users\list', compact('users', 'msg', 'id'));
  }

  public function create()
  {
    echo 'create users  data';
  }

  public function delete()
  {
    $id = $_GET['id'];

    $this->users_model->delete($id);
  }
}
