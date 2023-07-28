<?php

class HomeController
{

  public function index()
  {
    // echo view();



    echo   __METHOD__;
    // echo view();

  }

  public function create()
  {
    echo 'create home  page';
  }

  public function update($id = null)
  {
    echo 'create update  page' . $id;
  }


  public function delete($id = 0)
  {
    echo 'delete home  page' . $id;
  }
}
