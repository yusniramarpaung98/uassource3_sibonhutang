<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="noP" class="col-sm-3 control-label">No. Pelangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="noP" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Pelannggan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="namaP" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaP" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pelanggan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jk" class="form-control">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="alamatP" class="col-sm-3 control-label">Alamat Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatP" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Pelanggan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="hp" class="col-sm-3 control-label">No. HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor HP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kantor" class="col-sm-3 control-label">Nama Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="kantor"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Perkara" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="alamatK" class="col-sm-3 control-label">Alamat Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatK" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Kantor" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pelanggan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pelanggan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $noP=$_POST['noP'];
	$namaP=$_POST['namaP'];
	$jk=$_POST['jk'];
	$alamatP=$_POST['alamatP'];
      $hp=$_POST['hp'];
  $kantor=$_POST['kantor'];
	$alamatK=$_POST['alamatK'];
    //buat sql
    $sql="INSERT INTO pelanggan VALUES ('','$noP','$namaP','$jk','$alamatP','$hp','$kantor','$alamatK')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
