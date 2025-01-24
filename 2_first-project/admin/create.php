<?php
session_start();

require("../app/app.php");

ensure_user_is_authenticated();

$status = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $game_name = sanitize('name', INPUT_POST);
  $game_genre = sanitize('genre', INPUT_POST);
  $game_description = sanitize('description', INPUT_POST);
  
  if(!$game_name || !$game_genre || !$game_description) {
    array_push($status, 'Angegebene Werte sind ungültig!');
  }
  else {
    Data::add_game($game_name, $game_genre, $game_description);
    redirect('index.php');
  }
}

$view_data = [
  'title' => "Neues Game anlegen",
  'status' => $status
];

view('admin/create', $view_data);
