<?php
function cherryPick($array, $key) {
  $result = array_map(function ($item) use ($key) {
    return $item[$key];
  }, $array);
  return $result;
}

function output($value = 'Ausgabe') {
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

function redirect($url) {
  header("Location: $url");
  die();
}

function authenticate_user($email, $password) {
  return $email == ADMIN_EMAIL && $password == ADMIN_PASSWORD;
}

function ensure_user_is_authenticated() {
  if(!is_user_authenticated()) {
    redirect("login.php");
  }
}

function is_user_authenticated() {
  return isset($_SESSION['email']);
}