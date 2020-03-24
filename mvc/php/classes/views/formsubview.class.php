<?php
  namespace views;
  class FormSubView extends \mvc\View {
    public function getHTML() {
      $outputFormSub = "<div class='container'>";
      $outputFormSub .= "<form class='mt-5 p-3' method='post' action='/PHP-4/mvc/form'>";
      $outputFormSub .= "Voornaam: " . $_POST['ForName'] . "<br>";
      $outputFormSub .= "Achternaam: " . $_POST['SurName'] . "<br>";
      $outputFormSub .= "Email: " . $_POST['Email'] . "<br>";
      $outputFormSub .= "<input type='submit' name='submit' class='btn btn-primary mt-3' value='Ga terug'>";
      $outputFormSub .= "</form>";
      $outputFormSub .= "</div>";

      return $outputFormSub;
    }
  }
?>
