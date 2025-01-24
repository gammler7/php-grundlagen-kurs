<?php
class Data {
  static private $data_source;

  static public function initialize(DataProvider $data_provider) {
    self::$data_source = $data_provider;
  }

  static public function get_game($game) {
    return self::$data_source->get_game($game);
  }
  
  static public function search_games($search) {
    return self::$data_source->search_games($search);
  }
  
  static public function add_game($name, $genre, $description) {
    self::$data_source->add_game($name, $genre, $description);
  }
  
  static public function edit_game($id, $name, $genre, $description) {
    self::$data_source->edit_game($id, $name, $genre, $description);
  }
  
  static public function delete_game($id) {
    self::$data_source->delete_game($id);
  }

  static public function get_all_games() {
    return self::$data_source->get_all_games();
  }
}