
<?php


class basecontroller
{
  public function index(){
    $title = 'Welcome to our framework';
    view('welcome',compact('title'));
  }
}
