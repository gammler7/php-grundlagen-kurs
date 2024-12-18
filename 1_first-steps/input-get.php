<?php
  require_once("./inc/utility.php");
  
  // ?id=10&category=1
  $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
  $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

  if($category == false) {
    $category = 1;
  }

  if($limit == false) {
    $limit = 10;
  }
  
  $title = 'GET Request in PHP';
  require("./inc/header.php");
?>
  
  <h1>GET Request in PHP</h1>
  <?= "Kategorie: $category, Limit: $limit" ?>

<?php
  require("./inc/footer.php");
?>