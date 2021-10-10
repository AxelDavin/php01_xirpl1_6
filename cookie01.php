<?php

$value = 'axel';
$value2 = 'Axel Davin';

setcookie("username",$value);
setcookie("nama_lengkap",$value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk periksa cookie</h2>";

?>