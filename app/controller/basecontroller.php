
<?php


class basecontroller
{

  public function __construct()
  {

    if ($_SESSION["login"] !== true) {
      redirect('auth/login');
    }
  }


  public function index()
  {
    $title = 'Welcome to our framework';
    render('welcome', compact('title'));
  }
}
