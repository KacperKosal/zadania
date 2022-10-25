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
<input type="text" name="waga" size="10" placeholder="Waga" >

<input type="text" name="wzrost" size="10" placeholder="Wzrost">
<input type="submit" value="Oblicz swoje BMI">
</form>
<?php
$waga = $_POST['waga'];
$wzrost = $_POST['wzrost'];


$wynik = $waga/($wzrost/100*$wzrost/100);

echo "Twoje BMI: " .$wynik;
?>
</body>
</html>