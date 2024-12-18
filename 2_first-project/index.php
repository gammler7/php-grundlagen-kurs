<?php
require("app/app.php");

$search_game = sanitize('search_game', INPUT_GET);

if($search_game) {
  $list_data = search_games($search_game);
}
else {
  $list_data = get_all_games();
}

$view_data = [
  'title' => "Meine Gamelist",
  'game_list' => $list_data,
  'search_value' => $search_game
];

view('index', $view_data);