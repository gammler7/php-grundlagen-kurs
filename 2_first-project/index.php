<?php
require("app/app.php");

$search_game = sanitize('search_game', INPUT_GET);

//$data = new FileDataProvider(CONFIG['filename']);

if($search_game) {
  $list_data = Data::search_games($search_game);
}
else {
  $list_data = Data::get_all_games();
}

$view_data = [
  'title' => "Meine Gamelist",
  'game_list' => $list_data,
  'search_value' => $search_game
];

view('index', $view_data);