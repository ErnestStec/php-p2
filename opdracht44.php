<?php
  // Auteur: Ernest
  // Functie: Opdracht 5

  // Initalisatie:

  // Main:
  //4.5
  $getal = 7;

if ($getal % 2 == 0) {
    echo "Het getal $getal is even.";
} else {
    echo "Het getal $getal is oneven.";
}

echo "<br>";

  //4.6
  $uur = date("H");
  $temperatuur = 22;   
  $luchtvochtigheid = 80;
  if ($uur >= 17 || ($temperatuur < 20 && $luchtvochtigheid < 85)) {
    echo "Airco is uitgeschakeld.";
} else {
    echo "Airco is ingeschakeld.";
}
echo "<br>";

  //4.7
  $spaargeld = 800;
  $prijs = 1000;
  $tekort = $prijs - $spaargeld;

  if ($tekort > 250) {
    echo "Je spaargeld is nu: $spaargeld euro, je komt dus $tekort euro te kort! Je kan beter nog even een baantje gaan zoeken.";
} elseif ($tekort <= 250 && $tekort > 0) {
    echo "Je spaargeld is nu: $spaargeld euro, je hebt een tekort van $tekort euro. Je moet nog beetje sparen.";
} else {
    $bedrag = $spaargeld - $prijs;
    echo "Je spaargeld is nu: $spaargeld euro, hiermee is het mogelijk om de iPhone te kopen! Je hebt nog $bedrag euro over voor bijvorbeeld een hoesje.";
}

echo "<br>";

  //4.8
  $leeftijd = 22; 
  $stempas = false;

if ($leeftijd >= 16) {
    echo "Je mag praktijkexamen voor je scooterrijbewijs doen.";
} else {
    echo "Je bent te jong om een scooterrijbewijs te doen.";
}

echo "<br>";

if ($leeftijd >= 18) {
    if ($stempas) {
        echo "Je mag stemmen.";
    } else {
        echo "Je mag niet stemmen, want je hebt geen stempas!";
    }
} else {
    echo "Je bent te jong om te stemmen.";
}
?>
