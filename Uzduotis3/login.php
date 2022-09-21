<!-- 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi". -->
<?php 
$admin = "admin123456";

$user = $_GET["username"];
$pass = $_GET["password"];
$vartotojas = "$user $pass";

$prisijungti = "Truksta Duomenu";
if($admin == $user.$pass)
{
    $prisijungti = "Prisijungete Sekmingai";
}
else if($admin != $user.$pass)
{
    $prisijungti = "Blogi Duomenys";
} ;

echo "<div> $prisijungti</div>";

?>