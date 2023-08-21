
<?php


class basecontroller
{

  public function __construct()
  {

    $login = isset($_SESSION["login"]) ? $_SESSION["login"] : false;
    if ($login !== true && $GLOBALS['default_viewpath'] !== null) {
      redirect('auth/login');
    }
  }


  public function index()
  {
    $title = 'Welcome to our framework';

    if ($GLOBALS['default_viewpath'] == null) {

      render('welcome', compact('title'));
    } else {
      redirect($GLOBALS['default_viewpath']);
    }
  }
}
