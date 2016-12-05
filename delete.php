<?php 
 
include "koneksi.php"; 
 
$nim= $_GET['nim']; 

$query = "DELETE FROM `biodata` WHERE `nim`=$nim"; 
$hasil = mysql_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="http://localhost/templateadmin/index.php?page=tabel";</script>';

?>