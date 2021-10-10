
<?php
if(isset($_GET['Nama']) and isset($_GET['E-mail']))
{
    $nama =$_GET['Nama'];
    $email =$_GET['E-mail'];
}
else
{
    echo "Maaf, isi dulu bro<br><br>";
}
if(!empty($nama) ){
    echo "Nama: $nama <br/>";
    echo "E-mail: $email";
}
else{
    die("Maaf, isi nama dulu bro");
}

if(empty($email)){
    die("-");
} 

?>