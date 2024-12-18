<?php
  $games = [
    ['name' => 'Sonic', 'genre' => 'Jump & Run'],
    ['name' => 'Mario',  'genre' => 'Jump & Run'],
    ['name' => 'Toejam & Earl',  'genre' => 'Adventure']
  ];

  //$neue_games = array_column($games, 'genre');

  function cherryPick($array, $key) {
    $result = array_map(function ($item) use ($key) {
      return $item[$key];
    }, $array);
    return $result;
  }

  $neue_games = cherryPick($games, 'name');

  /* function sumNumbers($a, $b) {
    global $games;
    print_r($games);

    $result = $a + $b;

    return $result;
  }

  $result = sumNumbers(1, 2); */


  function output($value = 'Ausgabe') {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">
  <h1>Funktionen in PHP</h1>
  <?php output($neue_games) ?>
</body>
</html>