<?php
  $activeGame = 'Mario';
  
  switch($activeGame) {
    case 'Mario': 
      echo "Du spielst gerade Mario";
      break;
    case 'Sonic':
      echo "Du spielst gerade Sonic";
      break;
    default:
      echo "Du spielst gerade irgendwas anderes!";
  }

  $output = match($activeGame) {
    'Mario' => "Du spielst gerade Mario",
    'Sonic' => "Du spielst gerade Sonic",
    default => "Du spielst gerade irgendwas anderes!"
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
  <h1>Switch in PHP</h1>
  <? switch($activeGame): case 'Mario': ?>
    <h2>Mario</h2>
    <div>Du spielst gerade Mario</div>
  <? break; case 'Sonic': ?>
    <h2>Sonic</h2>
    <div>Du spielst gerade Sonic</div>
  <? break; default: ?>
    <div>Du spielst gerade irgendwas anderes!</div>
  <? endswitch; ?>

  <h2>if Template</h2>
  <? if($activeGame == 'Mario'): ?>
    <h2>Mario</h2>
    <div>Du spielst gerade Mario</div>
  <? endif; ?> 
  
  <h2>Match Ausgabe</h2>
  <?= $output ?>
</body>
</html>