<?php
  namespace views;
  class HomeView extends \mvc\View {
    public function getHTML() {
      $outputHome = "<header class='banner-background'>";
      $outputHome .= "<div class='banner'></div>";
      $outputHome .= "</header>";

      $outputHome .= "<nav class='bg-light'>";
      $outputHome .= "<h1 class='text-center'>Home</h1>";
      $outputHome .= "</nav>";

      return $outputHome;
    }
  }
?>
