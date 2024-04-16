<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<h2>Konversi Suhu</h2>

<form method="post" action="">
    Masukkan Suhu: <input type="number" name="suhu" required><br>
    Dari :  <br>
    <input type="radio" name="from_unit" value="C"> Celcius (C) <br>
    <input type="radio" name="from_unit" value="F"> Fahrenheit (F) <br>
    <input type="radio" name="from_unit" value="Re"> Reamur (Re) <br>
    <input type="radio" name="from_unit" value="K"> Kelvin (K)<br>
    Ke : <br>
    <input type="radio" name="to_unit" value="C"> Celcius (C) <br>
    <input type="radio" name="to_unit" value="F"> Fahrenheit (F) <br>
    <input type="radio" name="to_unit" value="Re"> Reamur (Re) <br>
    <input type="radio" name="to_unit" value="K"> Kelvin (K)<br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
if(isset($_POST['submit'])){
    $suhu = $_POST['suhu'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    // Konversi suhu
    switch($from_unit){
        case 'C':
            $C = $suhu;
            break;
        case 'F':
            $C = ($suhu - 32) * (5/9);
            break;
        case 'Re':
            $C = $suhu * (5/4);
            break;
        case 'K':
            $C = $suhu - 273.15;
            break;
    }

    // Konversi ke unit yang diinginkan
    switch($to_unit){
        case 'C':
            $hasil = $C;
            break;
        case 'F':
            $hasil = ($C * 9/5) + 32;
            break;
        case 'Re':
            $hasil = $C * (4/5);
            break;
        case 'K':
            $hasil = $C + 273.15;
            break;
    }

    // Tampilkan hasil konversi
    echo "<b>Hasil konversi: $hasil °$to_unit</b>";
}
?>

</body>
</html>
