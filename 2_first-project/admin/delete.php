<?php
session_start();

require("../app/app.php");

ensure_user_is_authenticated();

$status = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $game_id = sanitize('id', INPUT_POST);
  
  if(!$game_id) {
    array_push($status, 'Angegebene Werte sind ungültig!');
  }
  else {
    Data::delete_game($game_id);
    redirect('index.php');
  }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  $game = sanitize('game', INPUT_GET);

  if(!$game) {
    redirect("index.php");
  }

  $one_game = Data::get_game($game);

  if(!$one_game) {
    view('404');
    die();
  }
}

$view_data = [
  'title' => "Game löschen",
  'game' => $one_game,
  'status' => $status
];

view('admin/delete', $view_data);
