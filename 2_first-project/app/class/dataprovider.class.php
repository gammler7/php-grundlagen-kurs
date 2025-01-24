<?php

class DataProvider {
  protected $source;

  public function __construct($source) {
    $this->source = $source;
  }

  public function get_game($game) {}
  
  public function search_games($search) {}
  
  public function add_game($name, $genre, $description) {}
  
  public function edit_game($id, $name, $genre, $description) {}
  
  public function delete_game($id) {}

  public function get_all_games() {}
}