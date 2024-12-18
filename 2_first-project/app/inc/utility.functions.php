<?php

function view($template, $data = []) {
  require(APP_PATH . "views/layout.view.php");
}

function redirect($url) {
  header("Location: $url");
  die();
}

function validate($value, $method) {
  return filter_input($method, $value, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[\w\s:-]+$/']]);
}

function sanitize($value, $method) {
  return filter_input($method, $value, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

