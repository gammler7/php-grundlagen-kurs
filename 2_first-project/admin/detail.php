<?php
session_start();

require("../app/app.php");

ensure_user_is_authenticated();

$game = sanitize('game', INPUT_GET);

if(!$game) {
  redirect("index.php");
}

$one_game = get_game($game);

if(!$one_game) {
  view('404');
  die();
}

$view_data = [
  'title' => "Detailansicht (Admin)",
  'game' => $one_game
];

view('admin/detail', $view_data);