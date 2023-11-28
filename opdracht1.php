<?php
  // Auteur: Ernest
  // Functie: Opdracht 1

  // Initalisatie:

  // Main:
  $datum1 = date('l j F Y');
  echo "Het is vandaag: ${datum1}.";
  echo "<br>";  
  $datum2 = date('z') +1;
  echo "Vandaag is het de ${datum2}e dag van het jaar.";
  echo "<br>";
  $datum3 = date('l');
  $datum33 = date('w');
  echo "$datum3 is de ${datum33}e dag van de week.";
  echo "<br>";
  $datum4 = date('F');
  $datum44 = date('t');
  echo "De maand $datum4 heeft in totaal $datum44 dagen";
  echo "<br>";
  $datum5 = date('Y');
  $datum55 = date('L');
  echo "Het jaar $datum5 is $datum55";
  if ($datum55 == 0) {
    echo "geen schrikkeljaar.";
  }
  else {
    echo "een schrikkeljaar.";
  }
  
?>