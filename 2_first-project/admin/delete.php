<?php
session_start();

require("../app/app.php");

ensure_user_is_authenticated();

$status = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $org_game_name = sanitize('org_name', INPUT_POST);
  
  if(!$org_game_name) {
    array_push($status, 'Angegebene Werte sind ungültig!');
  }
  else {
    delete_game($org_game_name);
    redirect('index.php');
  }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  $game = sanitize('game', INPUT_GET);

  if(!$game) {
    redirect("index.php");
  }

  $one_game = get_game($game);

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
