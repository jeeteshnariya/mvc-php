<?php

class userscontroller
{
  public $user_model;

  public function __construct()
  {

    $this->user_model = model('user');
  }

  public function index()
  {
    $search = isset($_POST['search']) ? $_POST['search'] : '';

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $data =  $this->user_model->paginate($page,6 ,$search);

    renderView('users/index', ['data' => $data], 'layout/admin');
  }

  public function show($id = null)
  {
    view('adduser', compact('id'));
  }

  public function edit($id = null)
  {

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
