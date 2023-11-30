<?php
  // Auteur: Ernest
  // Functie: Opdracht 4

  // Initalisatie:

  // Main:
  //4.1
  $datum = date("G");

  if ($datum  >= 6 && $datum < 12) {
      echo "Het is ochtend.";
  } elseif ($datum >= 12 && $datum < 18) {
      echo "Het is middag.";
  } elseif ($datum >= 18 && $datum < 24) {
      echo "Het is avond.";
  } else {
      echo "Het is nacht.";
  }
  
  echo "<br>";
  //4.2
  $datum = date("G");

  $result = match (true) {
      $datum >= 6 && $datum < 12 => "Het is ochtend.",
      $datum >= 12 && $datum < 18 => "Het is middag.",
      $datum >= 18 && $datum < 24 => "Het is avond.",
      default => "Het is nacht.",
  };
  
  echo $result;
  echo "<br>";

  //4.3
$getal1 = 10;
$getal2 = 15;

$result = ($getal1 > $getal2) ? ($getal2 + ($getal1 * 2)) : ($getal1 + ($getal2 * 2));

echo $result;
echo "<br>";

  //4.4
$oudePrijs = 30;
$nieuwePrijs = 0;

if ($oudePrijs > 150) {
    $nieuwePrijs = $oudePrijs * 1.19;
} elseif ($oudePrijs < 55) {
    $nieuwePrijs = $oudePrijs * 1.11;
} else {
    $nieuwePrijs = $oudePrijs * 1.16;
}

echo "Oude prijs: €" . $oudePrijs . ". Na verhoging van 11% is de prijs: €" . number_format($nieuwePrijs, 2);
?>