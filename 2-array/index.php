<?php
// Definition eines indizierten Arrays
$forenames = array('Hans', 'Jürg', 'Gregor');

// Definition eines indizierten Arrays (kurzform)
$surnames = ['Müller', 'Johannson', 'Muster'];

// Array mit foreach ausgeben
foreach($forenames as $forename) {
  echo $forename;
}

// Array mit for ausgeben
for($i = 0; $i < sizeof($forenames); $i++) {
  echo $forenames[$i];
}

// Callback für array_map()
function toCapitalLetter($value) {
  return strtoupper($value);
}

// Für alle Werte des Arrays wird der Callback toCapitalLetter aufgerufen und das Resultat in einem neuen Array gesammelt.
$newForenames = array_map("toCapitalLetter", $forenames);
var_dump($newForenames);