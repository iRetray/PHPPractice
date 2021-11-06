<?php
echo "<div class='container'>";
echo "<br>";
echo "<h1>Array de numeros</h1>";
$numbersArray = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
];
foreach ($numbersArray as $number) {
    $index = $number - 1;
    echo "<p style='margin: 0px;'> Indice: {$index}  -  Numero: {$number} </p>";
}

echo "<br>";
echo "<h1>Dias de la semana</h1>";
$weekDays = [
    "Lunes",
    "Martes",
    "Miercoles",
    "Jueves",
    "Viernes",
    "Sabado",
    "Domingo"
];
echo "Hoy es {$weekDays[4]}";

echo "<br>";
echo "<h1>Nombres</h1>";
$firstName = [
    "0" => "Camila",
    "2" => "Pablo",
    "1" => "Pedro",
    "3" => "Gordon",
    "5" => "Epitafio",
];
echo '<pre>';
print_r($firstName);
echo '</pre>';

$secondName = [
    "1" => "Kike",
    "3" => "Barbara",
    "5" => "Albert",
    "0" => "Dorinel",
    "2" => "Alicia",
];
echo '<pre>';
print_r($secondName);
echo '</pre>';

echo "<br>";
echo "<h1>Datos personales</h1>";
$personalData = [
    "0" => [
        "nombre" => "Rodrigo",
        "edad" => 25,
        "peso" => 80,
    ],
    "1" => [
        "nombre" => "Pepito",
        "edad" => 32,
        "peso" => 80,
    ],
];
echo '<pre>';
print_r($personalData);
echo '</pre>';

echo "</div>";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Practice</title>
</head>

<body>
</body>

</html>