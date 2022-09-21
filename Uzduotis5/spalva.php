<!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva. -->
<?php 
$raudona = "raudona";
$juoda = "juoda";
$melyna = "melyna";



$spalva = $_POST["color"];


if($spalva == $juoda)
{
    echo '<body style="background-color:black">';
}
else if($spalva == $raudona)
{
    echo '<body style="background-color:red">';
}
else if($spalva == $melyna)
{
    echo '<body style="background-color:blue">';
} ;


echo "<div> $spalva</div>";

?>