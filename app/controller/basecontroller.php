
<?php


class basecontroller
{

  public $product_model;

  public function __construct()
  {
    $this->product_model = model('product');
    $login = isset($_SESSION["login"]) ? $_SESSION["login"] : false;
    if ($login !== true && $GLOBALS['default_viewpath'] !== null) {
      redirect('auth/login');
    }
  }


  public function index()
  {
    $title = 'Welcome to our framework';

    $search = isset($_POST['search']) ? $_POST['search'] : '';

    dd($search);

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $data =  $this->product_model->paginate($page, 6, $search, 'name');

    if ($GLOBALS['default_viewpath'] == null) {

      $data['title'] = $title;
      render('welcome', ['data' => $data], 'layout/guest');

     
    } else {
      redirect($GLOBALS['default_viewpath']);
    }
  }
}
