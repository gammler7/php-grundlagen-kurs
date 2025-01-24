<?php
require("app/app.php");

$game = sanitize('game', INPUT_GET);

if(!$game) {
  redirect("index.php");
}

$one_game = Data::get_game($game);

if(!$one_game) {
  view('404');
  die();
}

$view_data = [
  'title' => "Detailansicht",
  'game' => $one_game
];

view('detail', $view_data);