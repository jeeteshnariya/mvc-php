<?php

class AuthController
{

  public function login()
  {
    $this->authlayout('auth/login');
  }

  public function show()
  {
    var_dump($_POST);
  }

  public function signup()
  {
    $this->authlayout('auth/signup');
  }

  function authlayout($child)
  {
    view('layout/head') .
      view($child) .
      view('layout/tail');
  }
}
