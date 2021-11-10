<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>...Mõistatus</title>
</head>
<body>
<h1> ... </h1>
<?php
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=3;
$arv2=15;
//kahe arvude liitmine +
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastuseks ".($arv1/$arv2);
// esimene arv ruudus
echo "<br>";
echo "Esimene arv ruudus on ". pow($arv1, 2);
echo "<br>";
// lahutamine
echo "Kui teisest arvust lahutada esimene, siis vastus on ".($arv1-$arv2);
echo "<br>";
// korrutis
echo "Kahe arvude korrutis = ".($arv1*$arv2);
echo "<br>";

echo "<br><br>";
echo "<h2> Arva ära EESTI LINNANIMI</h2>";
echo "<br>";
$nimi="Tapa";
// esimene täht
echo "<br>Linnanimi pikkus - ".strlen($nimi);
echo "<br>Linnanimi 1.täht - ".substr($nimi, 0, 1);
echo "<br>Linnanimi segab tähemärke - ".$shuffled = str_shuffle($nimi);
echo "<br>Linnanimi pöörab tagurpidi- ".strrev($nimi);
echo "<br><br>";
echo "<a href='vastus.php'> Õiged vastused</a>";
?>


</body>
</html><?php
