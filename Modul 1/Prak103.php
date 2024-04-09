<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak103</title>
</head>
<body>
    <?php
    //variabel suhu
    $celcius = 37.841;
    $fahrenheit = (9/5) * $celcius + 32;
    $reamur = (4/5) * $celcius;
    $kelvin = $celcius + 273.15;

    //output
    echo "Fahrenheit (F) : $fahrenheit<br>";
    echo "Reamur (R) : $reamur<br>";
    echo "Kelvin (K): $kelvin";
    ?>
</body>
</html>