<?php
include "koneksi.php";
if(isset($_POST['submit']))
{
		//$name = $_FILES['file']['name'];
		//$temp = $_FILES['file']['tmp_name'];
		
		//move_uploaded_file($temp,"foto/".$name);
		$nim=$_POST['nim'];
		$file=$_POST['file'];
		$nama=$_POST['nama'];
		$jk=$_POST['jk'];
		$prodi=$_POST['prodi'];
		mysql_query("INSERT INTO `biodata` (`nim`, `nama`, `jk`, `prodi`, `foto`) VALUES ('$nim', '$nama', '$jk', '$prodi', '$file')");
		
				echo '<script language="javascript">alert("Insert succesfull  !"); document.location="http://localhost/templateadmin/index.php?page=tabel";</script>';
		
}
?>
<section class="content">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FORM ISIAN DATA MAHASISWA </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nim</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nim" placeholder="Inputkan NIM anda" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nama" placeholder="Inputkan nama anda" type="text">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
				   <div class="col-sm-10">
                  <select class="form-control" name="jk">
                    <option>Pilih Jenis Kelamin</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                   
                  </select>
				  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Program Studi</label>
				   <div class="col-sm-10">
                  <select class="form-control" name="prodi" >
                    <option>Pilih Program Studi</option>
                    <option>D3 - Teknik Informatika</option>
                    <option>D3 - Teknik Telekomunikasi</option>
                    <option>D4 - Teknik Telekomunikasi</option>
                    <option>D3 - Teknik Listrik</option>
					<option>D3 - Teknik Elektronika</option>
                  </select>
				  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Upload foto</label>
				  <div class="col-sm-10">
                  <input id="exampleInputFile" type="file">

                  <p class="help-block">Silakan pilih foto dari komputer anda</p>
				  </div>
                </div>
                </div>      
             
			  
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right" name="submit">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
			
          </div>
</section>