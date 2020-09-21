<?php
namespace views;

class CoronaView extends \mvc\View {
  public function getHTML() {
    $data = $this->model->getAllData();
    $output = "<div class='container mt-5'><table class='table table-striped table-bordered table-dark'><thead><th>ID</th><th>Provincie</th><th>Aantal</th><th>Doden</th><th>Genezen</th></thead>";
    $output .= "<tbody>";
    foreach ($data as $row) {
      $output .= "<tr>";
      $output .= "<td>" . $row['id'] . "</td>";
      $output .= "<td>" . $row['provincie'] . "</td>";
      $output .= "<td>" . $row['aantal'] . "</td>";
      $output .= "<td>" . $row['doden'] . "</td>";
      $output .= "<td>" . $row['genezen'] . "</td>";
      $output .= "</tr>";
    }
    $output .= "</tbody></table></div>";
    return $output;
  }
}
 ?>
