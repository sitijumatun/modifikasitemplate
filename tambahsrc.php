<?php
include "koneksi.php";
$name = $_FILES['file']['foto'];
$temp = $_FILES['file']['tmp_foto'];
move_uploaded_file($temp,"foto/".$name);
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$prodi=$_POST['prodi'];


$sql="INSERT INTO biodata VALUE ('$nim','$nama','$jk','$prodi','$name');";
$result=mysql_query($sql);
echo '<script language="javascript">alert("Anda berhasil insert picture !"); document.location="http://localhost/templateadmin/index.php?page=tabel";</script>';
?>