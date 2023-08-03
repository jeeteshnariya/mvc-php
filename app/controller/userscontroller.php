<?php

class userscontroller 
{
  public $user_model;

  public function __construct(){
    model('user');
    $this->user_model = new User();
  }

  public function index()
  {
 
    $users =  $this->user_model->allusers();

    view('users', compact('users'));
  }

  public function delete($id)
  {

    $data =  $this->user_model->delete($id);
    echo $data;
    
  }
}
