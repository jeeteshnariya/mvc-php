<?php


class db
{

  public $conn;


  public $table_name = '';

  public function __construct()
  {


    // Create connection
    $this->conn = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dbname']);

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public  function total()
  {
    return $this->conn->query("SELECT COUNT(id) FROM $this->table_name")->fetch_column();
  }

  public function paginate($page_no = 1, $limit = 5, $search = '')
  {

    $total_records = $this->total();
    $total_pages = ceil($total_records / $limit);

    $start_from = ($page_no - 1) * $limit;
    $rows = $this->conn->query("SELECT * FROM $this->table_name WHERE fullname LIKE '%$search%'	ORDER BY id DESC LIMIT  $start_from, $limit")->fetch_all(MYSQLI_ASSOC);

    $data = [
      'page_no' => $page_no,
      'total' => $total_records,
      'total_pages' => $total_pages,
      'users' => $rows
    ];

    return $data;
  }


  public function get_all()
  {
    return $this->conn->query("SELECT * FROM users ORDER BY id DESC")->fetch_all(MYSQLI_ASSOC);
  }

  public function get_by($id)
  {
    return $this->conn->query("SELECT * FROM $this->table_name where id=$id ")->fetch_assoc();
  }


  public function create($data)
  {
    $keys = implode(" ,", array_keys($data));
    $value = implode("', '", array_values($data));

    $sql = "INSERT INTO $this->table_name ($keys) VALUES ( '$value')";

    return $this->conn->query($sql);
  }



  public function delete($id)
  {
    $sql = "DELETE FROM $this->table_name WHERE id=$id";
    return $this->conn->query($sql);
  }
}
