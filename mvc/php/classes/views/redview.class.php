<?php
  namespace views;
  class RedView extends \mvc\View {
      public function getHTML() {
          if (isset($_GET['prev']) == 'blue') {
              $outputRed = "Ik ben een redirect vanaf blue";
          }
          else {
              $outputRed = "Welkom bij rood";
          }
          return $outputRed;
      }
  }
?>
