<?php

class UsersController{

  public function index(){
    echo 'users list data';
  }

  public function create()
  {
    echo 'create users  data';
  }

  public function delete( )
  {
    echo 'delete user id '.$_GET['search'];
  }
}


 