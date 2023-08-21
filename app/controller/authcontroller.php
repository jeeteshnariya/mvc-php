<?php

class authcontroller
{

  public function login()
  {
   
    render('auth/login', [], 'layout/guest');
  }

  public function signin()
  {
    var_export($_POST);
    if ($_POST['email'] == 'admin' && $_POST['password'] == 123) {
      $_SESSION["login"] = true;
      redirect('users/index');
    }
  }

  public function logout()
  {
    session_destroy();
    render('auth/login', [], 'layout/guest');
  }
}
