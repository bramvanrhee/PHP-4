<?php
  define("DEFAULT_ROUTE", "home");

  $routes = array(
    "home" => array(
      "view" => "HomeView",
      "controller" => "HomeController",
      "model" => "HomeModel",
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
      "model" => "TestModel",
    ),
    "corona" => array(
      "view" => "CoronaView",
      "controller" => "CoronaController",
      "model" => "CoronaModel",
    ),
    "red" => array(
      "view" => "RedView",
      "controller" => "RedController",
    ),
    "blue" => array(
      "controller" => "BlueController",
    ),
  );
?>
