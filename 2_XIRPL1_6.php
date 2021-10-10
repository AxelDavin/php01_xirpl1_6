<!DOCTYPE html>
<head>
<title>Belajar PHP</title>
</head>
<body>
    <h3>Perulangan</h3>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d-m-Y H:i:s') . "<br>";
        for($a = 5; $a >= 1; $a--) {
            for($b = 1; $b <= $a; $b++) {
                echo "*";
                if($b < $a) {
                echo " ";
                }
            }
            echo "<br />";
            }
    ?>
</body>
</html>