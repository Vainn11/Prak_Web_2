<!DOCTYPE html>
<html>
<head>
    <title>Sorting Names</title>
</head>
<body>

<h2>Masukkan Tiga Nama</h2>

<form method="post" action="">
    Nama 1: <input type="text" name="nama1"><br>
    Nama 2: <input type="text" name="nama2"><br>
    Nama 3: <input type="text" name="nama3"><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
// Cek apakah form telah disubmit
if(isset($_POST['submit'])){
    // Mengambil nilai dari inputan
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    // Memeriksa kondisi untuk mengurutkan nama
    if($nama1 < $nama2 && $nama1 < $nama3){
        echo "<b>Output:</b> <br> $nama1<br>";
        if($nama2 < $nama3){
            echo "$nama2<br> $nama3<br>";
        } else {
            echo "$nama3<br> $nama2<br>";
        }
    } elseif($nama2 < $nama1 && $nama2 < $nama3){
        echo "<b>Output:</b><br> $nama2<br>";
        if($nama1 < $nama3){
            echo "$nama1<br> $nama3<br>";
        } else {
            echo "$nama3<br> $nama1<br>";
        }
    } else {
        echo "<b>Output:</b><br> $nama3<br>";
        if($nama1 < $nama2){
            echo "$nama1<br> $nama2<br>";
        } else {
            echo "$nama2<br> $nama1<br>";
        }
    }
}
?>

</body>
</html>
