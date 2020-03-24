<?php
  namespace views;
  class FormView extends \mvc\View {
    public function getHTML() {

      $outputForm = "<div class='container'>";
      $outputForm .= "<form class='mt-5 p-3' method='post' action='/PHP-4/mvc/formSubmission'>";

      $outputForm .= "<div class='form-group'>";
      $outputForm .= "<label for='ForName'>Voornaam</label>";
      $outputForm .= "<input type='text' class='form-control' id='ForName' name='ForName' placeholder'Vul uw voornaam in...' required>";
      $outputForm .= "</div>";

      $outputForm .= "<div class='form-group'>";
      $outputForm .= "<label for='SurName'>Achternaam</label>";
      $outputForm .= "<input type='text' class='form-control' id='SurName' name='SurName' placeholder'Vul uw achternaam in...' required>";
      $outputForm .= "</div>";

      $outputForm .= "<div class='form-group'>";
      $outputForm .= "<label for='Email'>Email</label>";
      $outputForm .= "<input type='email' class='form-control' id='Email' name='Email' placeholder'Vul uw email in...' required>";
      $outputForm .= "</div>";

      $outputForm .= "<input type='submit' name='submit' class='btn btn-primary' value='Verstuur'>";

      $outputForm .= "</form>";
      $outputForm .= "</div>";

      return $outputForm;
    }
  }
?>
