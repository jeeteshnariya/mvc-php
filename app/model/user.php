<?php
include 'db.php';
class user extends db
{


  public function get_all()
  {
    return $this->conn->query("SELECT * FROM users ORDER BY id DESC ")->fetch_all(MYSQLI_ASSOC);
  }

  public function get_by($id)
  {
    return $this->conn->query("SELECT * FROM users where id=$id ")->fetch_assoc();
  }
 

  public function create($data)
  {
    $keys = implode(" ,", array_keys($data));
    $value = implode("', '", array_values($data));

    $sql = "INSERT INTO users ($keys) VALUES ( '$value')";

    return $this->conn->query($sql);
  }



  public function delete($id)
  {
    $sql = "DELETE FROM users WHERE id=$id";
    return $this->conn->query($sql);
  }
}
