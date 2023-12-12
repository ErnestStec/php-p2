<?php
  // Auteur: Ernest
  // Functie: Opdracht 6

  // Initalisatie:

  // Main:
  //6.1
  session_start();
  if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {  $_SESSION['page_views']++;
}
echo "Deze pagina heb je al: " . $_SESSION['page_views'] . " keer bekeken voordat je de internetbrowser hebt afgesloten.";
echo "<br>";

  //6.2
 function getAndUpdateTotalVisits() {
    $totalVisits = 0;

    if (isset($_COOKIE['total_visits'])) {
        $totalVisits = (int)$_COOKIE['total_visits'];
    }

    $totalVisits++;
    setcookie('total_visits', $totalVisits, time() + 3600); 

    return $totalVisits;
}

$totalVisits = getAndUpdateTotalVisits();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

echo "Deze pagina heb je al: " . $_SESSION['page_views'] . " keer bekeken voordat de internetbrowser is afgesloten.<br>";
echo "In totaal heb je deze pagina al: " . $totalVisits . " keer bekeken.";
echo "<br>";

   //6.3
   function generateRandomPostcode() {
    $letters = range('A', 'Z'); 
    $randomLetters = $letters[array_rand($letters)] . $letters[array_rand($letters)];
    $randomNumbers = str_pad(mt_rand(1000, 9999), 4, '0', STR_PAD_LEFT);
    $randomPostcode = $randomNumbers . ' ' . $randomLetters;
    return $randomPostcode;
}
$randomPostcode = generateRandomPostcode();
echo "Een willekeurige postcode is: $randomPostcode";
echo "<br>";

   //6.4
function berekenOmtrek($straal) {
    $pi = 3.14159;
    $omtrek = 2 * $pi * $straal;
    return round($omtrek, 1);
}
function berekenOppervlakte($straal) {
    $pi = 3.14159;
    $oppervlakte = $pi * pow($straal, 2);
    return round($oppervlakte, 1);
}
$straal = 7;
$omtrek = berekenOmtrek($straal);
$oppervlakte = berekenOppervlakte($straal);

echo "De omtrek van een cirkel met straal $straal is: $omtrek\n";
echo "<br>";
echo "De oppervlakte van een cirkel met straal $straal is: $oppervlakte\n";

?>
