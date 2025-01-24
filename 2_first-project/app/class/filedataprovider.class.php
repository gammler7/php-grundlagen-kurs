<?php
require_once("game.class.php");

class FileDataProvider extends DataProvider {  
  public function get_game($game) {
    $all_games = $this->get_all_games();
    foreach($all_games as $list_item) {
      if($list_item->id == $game) {
        return $list_item;
      }
    }
  
    return false;
  }
  
  public function search_games($search) {
    $all_games = $this->get_all_games();
  
    $result = array_filter($all_games, function($item) use($search) {
      return 
        stripos($item->name, $search) !== false ||
        stripos($item->genre, $search) !== false || 
        stripos($item->description, $search) !== false;
    });
  
    return $result;
  }
  
  public function add_game($name, $genre, $description) {
    $game_list = $this->get_all_games();
  
    $id = uniqid();
  
    $new_game = new Game($id, $name, $genre, $description);
    array_push($game_list, $new_game);
    
    /* array_push($game_list, [
      "id" => $id,
      "name" => $name,
      "genre" => $genre,
      "description" => $description
    ]); */
  
    $this->set_games_data($game_list);
  }
  
  public function edit_game($id, $name, $genre, $description) {
    $all_games = $this->get_all_games();
  
    foreach($all_games as $list_item) {
      if($list_item->id == $id) {
        $list_item->name = $name;
        $list_item->genre = $genre;
        $list_item->description = $description;
      }
    }
  
    $this->set_games_data($all_games);
  }
  
  public function delete_game($id) {
    $all_games = $this->get_all_games();
  
    foreach($all_games as $key => $list_item) {
      if($list_item->id == $id) {
        //unset($all_games[$key]);
        array_splice($all_games, $key, 1);
        break;
      }
    }
  
    $this->set_games_data($all_games);
  }

  public function get_all_games() {
    return $this->get_games_data();
  }

  private function get_games_data() {
    $json = '';
  
    if(!file_exists($this->source)) {
      file_put_contents($this->source, '');
    }
    else {
      $json = file_get_contents($this->source);
    }
  
    return json_decode($json);
  }
  
  private function set_games_data($game_list) {
    $json = json_encode($game_list);
    file_put_contents($this->source, $json);
  }
}