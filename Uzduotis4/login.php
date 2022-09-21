<!-- 4. Papildikite 3 programą:
   *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
   *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php -->
<?php 
$admin = "admin123456";

$user = $_GET["username"];
$pass = $_GET["password"];
$vartotojas = "$user $pass";

$prisijungti = "Truksta Duomenu";
if($admin == $user.$pass)
{
    $prisijungti = header ('location: manopaskyra.php');
}
else if($admin != $user.$pass)
{
    $prisijungti = header ('location: page404.php');
} ;

echo "<div> $prisijungti</div>";

?>