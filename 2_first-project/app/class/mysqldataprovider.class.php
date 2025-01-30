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
    $data = $this->db_operation(
      "SELECT * FROM games WHERE id = :id",
      [
        ':id' => $game
      ]
    );

    return $data[0] ?? null;
  }
  
  public function search_games($search) {
    $data = $this->db_operation(
      "SELECT * FROM games WHERE name LIKE :search OR genre LIKE :search OR description LIKE :search",
      [
        ':search' => "%$search%"
      ]
    );

    return $data;
  }
  
  public function add_game($name, $genre, $description) {
    $this->db_operation(
      "INSERT INTO games (name, genre, description) VALUES (:name, :genre, :description)",
      [
        ':name' => $name,
        ':genre' => $genre,
        ':description' => $description
      ]
    );
  }
  
  public function edit_game($id, $name, $genre, $description) {
    $this->db_operation(
      "UPDATE games SET name = :name, genre = :genre, description = :description WHERE id = :id",
      [
        ':id' => $id,
        ':name' => $name,
        ':genre' => $genre,
        ':description' => $description
      ]
    );
  }
  
  public function delete_game($id) {
    $this->db_operation(
      "DELETE FROM games WHERE id = :id",
      [
        ':id' => $id
      ]
    );
  }

  public function get_all_games() {
    $data = $this->db_operation(
      "SELECT * FROM games"
    );

    return $data;
  }

  private function db_operation($sql, $params = null) {
    $db = $this->db_connect();
    if($db === null) return [];

    if(!$params) {
      $statement = $db->query($sql);
    }
    else {
      $statement = $db->prepare($sql);
      $statement->execute($params);
    }

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