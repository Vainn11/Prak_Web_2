<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Nilai : <input type="number" name="nilai"> <br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $nilai = $_POST['nilai'];

        if ($nilai == 0) {
            echo "<b>Hasil : Nol</b>";
            return false;
        }
        elseif ($nilai >= 1 && $nilai < 10) {
            echo "<b>Hasil : Satuan</b>";
            return false;
        }
        elseif ($nilai >= 10 && $nilai < 100) {
            echo "<b>Hasil : Belasan</b>";
            return false;
        } 
        elseif ($nilai >= 100 && $nilai < 1000) {
            echo "<b>Hasil : Ratusan</b>";
            return false;
        }
        else {
            echo "<b>Anda Menginput Melebihi Limit Bilangan</b>";
            return false;
        }
    }
    ?>
</body>
</html>