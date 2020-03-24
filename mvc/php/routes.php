<?php
  define("DEFAULT_ROUTE", "home");

  $routes = array(
    "home" => array(
      "view" => "HomeView",
      "controller" => "HomeController",
    ),
    "form" => array(
      "view" => "FormView",
      "controller" => "FormController",
    ),
    "formSubmission" => array(
      "view" => "FormSubView",
      "controller" => "FormSubController",
    ),
    "test" => array(
      "view" => "TestView",
      "controller" => "TestController",
    ),
  );
?>
