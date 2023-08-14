<?php

class userscontroller
{
  public $user_model;

  public function __construct()
  {

    // use model function for load model folder model name
    model('user');
    $this->user_model = new User();
  }

  public function index()
  {
    $users =  $this->user_model->get_all();
 
    view('users', compact('users'));
  }

  public function show($id = null)
  {
    view('adduser', compact('id'));
  }

  public function edit($id = null){

    $user = $this->user_model->get_by($id);
    view('adduser', compact('id', 'user'));

  }

  public function create()
  {

    $data = [

      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'contact' => $_POST['contact'],
      'address' => $_POST['address'],
      'status' => 'locked',
    ];


    $result = $this->user_model->create($data);

    if ($result) {
      header('Location: ?url=users/index');
      exit;
    }
  }

  public function delete($id)
  {

    $result =  $this->user_model->delete($id);

    if ($result) {
      header('Location: ?url=users/index');
      exit;
    }
  }
}
