
<?php
if(isset($_COOKIE['username'])){
    echo "<h1>Cookie 'username' ada. Isinya : " . $_COOKIE['username']."</h1>";
} else{
    echo "<h1>Cookie 'username' tidak ada</h1>";
}

if(isset($_COOKIE['nama_lengkap'])){
    echo "<h1>Cookie 'namalengkap' ada. isinya : " . $_COOKIE['nama_lengkap']."</h1>";
} else{
    echo "<h1>Cookie 'namalengkap' tidak ada. </h1>";
}

echo "<h2>klik <a href = cookie01.php>disini</a> untuk penciptaan cookies </h2> "

?>