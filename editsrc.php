<?php 
 
include "koneksi.php"; 
 
$name = $_FILES['file']['foto'];
$temp = $_FILES['file']['tmp_foto'];
move_uploaded_file($temp,"foto/".$name);
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$prodi=$_POST['prodi'];

$query = "UPDATE biodata SET nim='$nim', nama='$nama',jk='$jk',prodi='$prodi',foto='$name' WHERE nim='$nim'"; 
$hasil = mysql_query($query);
 
if ($hasil) echo '<script language="javascript">alert("Anda berhasil mengedit data !"); document.location="http://localhost/templateadmin/index.php?page=tabel";</script>';
else echo "Pengeditan data gagal"; 

?>