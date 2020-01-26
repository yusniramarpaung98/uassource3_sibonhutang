<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM bon WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Bon Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noP" class="col-sm-3 control-label">Nomor Pelanggan</label>
                             <div class="col-sm-9">
								<input type="text" name="noP" value="<?=$data['noP']?>"class="form-control" id="inputEmail3" placeholder="Nomor Pelanggan" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namaP" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaP" value="<?=$data['namaP']?>"class="form-control" id="inputEmail3" placeholder="Nama Pelanggan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hp" class="col-sm-3 control-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" value="<?=$data['hp']?>"class="form-control" id="inputEmail3" placeholder="No.HP">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamatK" class="col-sm-3 control-label">Alamat Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatK" value="<?=$data['alamatK']?>"class="form-control" id="inputEmail3" placeholder="Alamat Kantor">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="tgl_bon" class="col-sm-3 control-label">Tanggal Bon</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_bon" value="<?=$data['tgl_bon']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Bon">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_bayar" class="col-sm-3 control-label">Tanggal Bayar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_bayar" value="<?=$data['tgl_bayar']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Bayar">
                            </div>
                        </div>
						
						
						
                         <div class="form-group">
                            <label for="barang" class="col-sm-3 control-label">Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="barang" value="<?=$data['barang']?>"class="form-control" id="inputEmail3" placeholder="Barang">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="total" class="col-sm-3 control-label">Total Bon</label>
                            <div class="col-sm-9">
                                <input type="text" name="total" value="<?=$data['total']?>"class="form-control" id="inputEmail3" placeholder="Total Bon">
                            </div>
                             <div class="form-group">
                            <label for="uangmuka" class="col-sm-3 control-label">Uang Dimuka</label>
                            <div class="col-sm-9">
                                <input type="text" name="uangmuka" value="<?=$data['uangmuka']?>"class="form-control" id="inputEmail3" placeholder="Uang Dimuka">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Bon Pelanggan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=bon&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Catatan Bon
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
    $hp=$_POST['hp'];
    $alamatK=$_POST['alamatK'];
	$tgl_bon=$_POST['tgl_bon'];
	$tgl_bayar=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
	$barang=$_POST['barang'];
    $total=$_POST['total'];
    $uangmuka=$_POST['uangmuka'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE bon SET noP = '$noP', namaP='$namaP', hp='$hp', alamatK='$alamatK', tgl_bon='$tgl_bon', tgl_bayar='$tgl_bayar', barang='$barang', total='$total',uangmuka='$uangmuka',ket='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=bon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



