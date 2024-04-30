<html>
<head>
    <title>Soal_5_Modul_3</title>
</head>
<body>
    <form action="" method="post">
            <input type="text" name="kata">
            <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <?php if( isset($_POST['submit']) ) : ?>
        <?php
            $kata = $_POST['kata'];
            $arr = str_split($kata);
            echo "<h2>Input:</h2>$kata<br><h2>Output:</h2>";
            for( $i = 1; $i <= count($arr); $i = $i + 1 ) {
                for( $j = 1; $j <= count($arr); $j = $j + 1 ) {
                    if( $j == 1 ) {
                        echo strtoupper($arr[$i-1]);
                    } else {
                        echo strtolower($arr[$i-1]);
                    }
                }
            } ?>
    <?php endif; ?>
</body>
</html>