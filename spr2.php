<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KacperKosal</title>
</head>
<body>
<form method="POST" action="">
<input type="text" name="liczba1" size="10">

<input type="text" name="liczba2" size="10">
<input type="submit" value="Oblicz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];

$wynikd = $liczba1+$liczba2;
$wyniko = $liczba1-$liczba2;
$wynikm = $liczba1*$liczba2;
$wynikdz = $liczba1/$liczba2;


echo "Dodawanie: " .$wynikd;
echo " Odejmowanie: "   .$wyniko;
echo " Mnozenie: " .$wynikm;
echo " Dzielenie:" .$wynikdz;
?>
</body>
</html>