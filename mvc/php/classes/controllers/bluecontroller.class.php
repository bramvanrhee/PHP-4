<?php
  namespace controllers;

  class BlueController extends \mvc\Controller {
      public function __construct() {
          header('location:red?prev=blue');
      }
  }
?>
