<?php
namespace models;

class CoronaModel extends \mvc\Model {
  private function createConnection() {
    $mysqli = mysqli_connect("localhost", "root", "" , "corona2020");
    if($mysqli === false) {
      die("Geen connectie kunnen maken");
    }
    return $mysqli;
  }
  public function getAllData() {
    $conn = $this->createConnection();
    $sql = "SELECT * from corona";
    $result = mysqli_query($conn,$sql);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
  }
}
?>
