<?php
  $games = ['Sonic', 'Mario', 'Toejam & Earl'];
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
  <h1>Schleifen in PHP</h1>
  <h2>ForEach-Schleife</h2>
  <?php foreach($games as $game): ?>  
    <div>
      <span>Name des Spieles: </span><span><?= $game ?></span>
    </div>    
  <?php endforeach; ?>  

  <h2>For-Schleife</h2>
  <?php for($i = 0;$i < count($games);$i++): ?>
    <div>
      <span>Name des Spieles: </span><span><?= $games[$i] ?></span>
    </div>
  <?php endfor; ?>

  <h2>While-Schleife</h2>
  <?php $i = 0; while($i < count($games)): ?>
    <div>
      <span>Name des Spieles: </span><span><?= $games[$i] ?></span>
    </div>
  <?php $i++; endwhile; ?>
</body>
</html>