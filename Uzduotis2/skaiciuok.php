<!-- 2. Sukurkite skaičiuotuvą, sudedantį dvi trupmenas. Rezultatas atvaizduojamas su sveikąja ir trupmenine dalimi į div.
Kiekvienas laukelis turi turėti patikrinimą, ar jame yra įvestas skaičius. -->
<?php 

$skaicius1 = $_GET["skaicius1"];
$skaicius2 = $_GET["skaicius2"];
$veiksmas = $_GET["veiksmas"];

$rezultatas = 0;

if($veiksmas == "+")
{
    $rezultatas = $skaicius1 + $skaicius2;
}
else if($veiksmas == "-")
{
    $rezultatas = $skaicius1 - $skaicius2;
} 
else if($veiksmas == "*")
{
    $rezultatas = $skaicius1 * $skaicius2;
} 
else if($veiksmas == "/")
{
    $rezultatas = $skaicius1 / $skaicius2;
} 

echo "<div>Rezultatas: $rezultatas</div>";
?>


