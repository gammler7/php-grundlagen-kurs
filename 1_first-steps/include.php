<?php
  require_once("./inc/utility.php");

  $games = [
    ['name' => 'Sonic', 'genre' => 'Jump & Run'],
    ['name' => 'Mario',  'genre' => 'Jump & Run'],
    ['name' => 'Toejam & Earl',  'genre' => 'Adventure']
  ];

  //$neue_games = array_column($games, 'genre');

  

  $neue_games = cherryPick($games, 'name');

  /* function sumNumbers($a, $b) {
    global $games;
    print_r($games);

    $result = $a + $b;

    return $result;
  }

  $result = sumNumbers(1, 2); */

  $title = 'Include in PHP';
  require("./inc/header.php");
?>
  
  <h1>Include in PHP</h1>
  <?php output($neue_games) ?>

<?php
  require("./inc/footer.php");
?>