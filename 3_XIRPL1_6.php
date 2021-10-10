<!DOCTYPE html>
<html>
<body>

<?php
    $nama = array("Satria"=>"XI RPL 1","Arsyi"=>"XI RPL 2","Dhika"=>"XI RPL 3","Evan"=> "XI RPL 4","fabian"=>"XI RPL 5","Irfan"=>"XI RPL 6"); 
    foreach($nama as $x => $x_value) {
    echo "Nama=" . $x . ", Kelas=" . $x_value;
    echo "<br>";
  }
?>

</body>
</html>