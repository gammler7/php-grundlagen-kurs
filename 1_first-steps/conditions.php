<?php

$firstName = "Max";
$lastName = "Mustermann";

if($firstName == "Max" && $lastName != "Mustermann") {
  echo "Bedingung ist wahr";
}
else if($firstName == "Max") {
  echo "Bedingung 2 ist wahr";
}
else {
  echo "Bedingung ist falsch";
}

echo "<br>Hallo";