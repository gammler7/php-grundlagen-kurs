<?php

class Game {
  public $id;
  public $name;
  public $genre;
  public $description;
  function __construct($id, $name, $genre, $description) {
    $this->id = $id;
    $this->name = $name;
    $this->genre = $genre;
    $this->description = $description;
  }
}