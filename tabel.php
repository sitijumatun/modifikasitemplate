<?php
include "koneksi.php";
$query="SELECT * from biodata ";
$hasil=mysql_query($query);
?>
<section class="content-header">
      <h1>
        Tabel Mahasiswa Politeknik Negeri Semarang
        <small>list dari mahasiswa politeknik negeri semarang</small>
      </h1>
      <ol class="breadcrumb">
      
        <li></li>

      </ol>
    </section>
<section class="content">
      <div class="box">
            <div class="box-header">
            
			  <a href="http://localhost/templateadmin/index.php?page=form"><button type="button" class="btn btn-block btn-warning">Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                 <th style="width: 10px">NO</th>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>JENIS KELAMIN</th>
				   <th>PRODI</th>
				  <th>FOTO</th>
				  <th>ACTION</th>
                </tr>
				<?php
					$i=1;
					while ($data=mysql_fetch_array($hasil))
					{
					?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><span class="badge bg-red"><?php echo $data['nim'];?></span></td>
				  <td><?php echo $data['nama'];?></td>
				  <td><?php echo $data['jk'];?></td>
				  <td><?php echo $data['prodi'];?></td>
				  <td><?php echo "<img src='foto/$data[foto]' width='150' height='150'>";?></td>
				  <td><a href='editform.php?nim="<?php echo $data['nim'];?>"'><button type="button" class="btn btn-block btn-success">Edit</button></a>&nbsp;<a href='delete.php?nim="<?php echo $data['nim'];?>"'><button type="button" class="btn btn-block btn-danger">Delete</button></td></a>
                </tr>
				<?php
								$i++;
								}
				?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
       
</section>