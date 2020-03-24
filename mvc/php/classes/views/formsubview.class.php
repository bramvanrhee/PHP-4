<?php
  namespace views;
  class FormSubView extends \mvc\View {
    public function getHTML() {
      $outputFormSub = "<div class='container'>";
      $outputFormSub .= "<form class='mt-5 p-3' method='post' action='/PHP-4/mvc/form'>";
      $outputFormSub .= "Voornaam: " . filter_var($_POST['ForName'], FILTER_SANITIZE_STRING) . "<br>";
      $outputFormSub .= "Achternaam: " . filter_var($_POST['SurName'], FILTER_SANITIZE_STRING) . "<br>";
      $outputFormSub .= "Email: " . filter_var($_POST['Email'], FILTER_SANITIZE_STRING) . "<br>";
      $outputFormSub .= "<input type='submit' name='submit' class='btn btn-primary mt-3' value='Ga terug'>";
      $outputFormSub .= "</form>";
      $outputFormSub .= "</div>";

      return $outputFormSub;
    }
  }
?>
