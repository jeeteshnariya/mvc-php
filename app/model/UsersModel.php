<?php

class UsersModel
{


  public function delete($id)
  {
    echo("DELETE FROM ".$id);
  }


  public function getUsers()
  {
    return   [
      ['name' => 'jatin'],
      ['name' => 'niraj'],
      ['name' => 'jatin'],
      ['name' => 'niraj'],
      ['name' => 'jatin'],
      ['name' => 'niraj'],
    ];
  }
}
