<?php
include 'basecontroller.php';
class productscontroller extends basecontroller
{
  public $product_model;

  public function __construct()
  {
    parent::__construct();
    $this->product_model = model('product');
  }

  public function index()
  {
    $search = isset($_POST['search']) ? $_POST['search'] : '';

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $data =  $this->product_model->paginate($page, 6, $search, 'name');

    render('products/index', ['data' => $data], 'layout/admin');
  }

  public function show($id = null)
  {
    render('products/form', ['id' => $id], 'layout/admin');
  }

  public function edit($id = null)
  {

    $user = $this->product_model->get_by($id);
    render('products/form', ['id' => $id, 'user' => $user], 'layout/admin');
  }

  public function create()
  {

    $data = [

      'name' => $_POST['name'],
      'detail' => $_POST['detail'],
      'price' => $_POST['price'],


    ];


    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $filename;

    if (move_uploaded_file($tempname, $folder)) {
      $data['image'] = $folder;
      $result = $this->product_model->create($data);

      if ($result) {
        redirect('products/index');
      }
    } else {
      dd($data);
      echo "<h3>  Failed to upload image!</h3>";
    }
  }

  public function delete($id)
  {

    $result =  $this->product_model->delete($id);

    if ($result) {
      redirect('products/index');
    }
  }
}
