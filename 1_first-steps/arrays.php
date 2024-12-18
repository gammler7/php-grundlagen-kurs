<?php

// traditional array
$games = ['Sonic', 'Mario', 'Toejam & Earl'];

print_r($games);

if(isset($games[0])) {
  echo $games[0];
}
else {
  echo "Index 3 nicht vorhanden";
}

// associative array
$games1 = [
  'spiel1' => 'Sonic',
  'spiel2' => 'Mario',
  'spiel3' => 'Toejam & Earl'
];

print_r($games1);

if(isset($games1['spiel2'])) {
  echo $games1['spiel2'];
}
else {
  echo "Index 3 nicht vorhanden";
}

$games2 = [
  'spiel1' => 'Sonic',
  'spiel2' => [
    'name' => 'Mario',
    'genre' => 'Jump & Run'
  ],
  'spiel3' => 'Toejam & Earl',
  'Spiel1' => 'Ninja Turtles'
];

print_r($games2);

if(isset($games2['Spiel1'])) {
  echo $games2['Spiel1'];
}
else {
  echo "Index 3 nicht vorhanden";
}