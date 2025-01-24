<?php
require_once("game.class.php");

class MySqlDataProvider extends DataProvider {  
  protected $source;
  protected $db_user;
  protected $db_password;

  public function __construct($source, $db_user, $db_password) {
    $this->source = $source;
    $this->db_user = $db_user;
    $this->db_password = $db_password;
  }

  public function get_game($game) {
    $db = $this->db_connect();
    if($db === null) return;

    $sql = "SELECT * FROM games WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':id' => $game
    ]);

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $i => $row) {
      $data[$i] = new Game(...$row);
    }

    return $data[0];
  }
  
  public function search_games($search) {
    $db = $this->db_connect();
    if($db === null) return [];

    $sql = "SELECT * FROM games WHERE name LIKE :search OR genre LIKE :search OR description LIKE :search";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':search' => "%$search%"
    ]);

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $i => $row) {
      $data[$i] = new Game(...$row);
    }

    return $data;
  }
  
  public function add_game($name, $genre, $description) {
    $db = $this->db_connect();
    if($db === null) return;

    $sql = "INSERT INTO games (name, genre, description) VALUES (:name, :genre, :description)";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':name' => $name,
      ':genre' => $genre,
      ':description' => $description
    ]);
  }
  
  public function edit_game($id, $name, $genre, $description) {
    $db = $this->db_connect();
    if($db === null) return;

    $sql = "UPDATE games SET name = :name, genre = :genre, description = :description WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':id' => $id,
      ':name' => $name,
      ':genre' => $genre,
      ':description' => $description
    ]);
  }
  
  public function delete_game($id) {
    $db = $this->db_connect();
    if($db === null) return;

    $sql = "DELETE FROM games WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':id' => $id
    ]);
  }

  public function get_all_games() {
    $db = $this->db_connect();
    if($db === null) return [];

    $sql = "SELECT * FROM games";
    $statement = $db->query($sql);

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $i => $row) {
      $data[$i] = new Game(...$row);
    }

    return $data;
  }

  private function db_connect() {
    try {
      return new PDO($this->source, $this->db_user, $this->db_password);
    }
    catch (PDOException $e) {
      return null;
    }
  }
}