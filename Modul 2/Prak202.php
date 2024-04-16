<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Masukkan Nama, Nim,dan Jenis Kelamin</h3>
    <form method="post" action="">
    Nama: <input type="text" name="nama" required><br>
    NIM: <input type="text" name="nim" required><br>
    Jenis Kelamin: <br>
    <input type="radio" name="J_K" value="Laki-Laki"> Laki-Laki<br>
    <input type="radio" name="J_K" value="Perempuan"> Perempuan<br>
    <input type="submit" name="submit" value="Submit">
    </form> 

    <?php
    if(isset($_POST['submit'])){
        // Mengambil nilai dari inputan
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $J_K = isset($_POST['J_K']) ? $_POST['J_K'] : '';

        echo "$nama <br>";
        echo "$nim <br>";
        echo "$J_K <br>";
        }
    ?>
</body>
</html>