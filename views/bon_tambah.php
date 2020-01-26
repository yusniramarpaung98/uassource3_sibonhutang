<?php
$noP=$_GET['noP'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE noP ='$noP'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Catatan BON</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noP" class="col-sm-3 control-label">Nomor Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="noP" value="<?=$data['noP']?>" class="form-control" id="inputEmail3" placeholder="Nomor Pelanggan" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="namaP" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaP" value="<?=$data['namaP']?>" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" readonly="true">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="hp" class="col-sm-3 control-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" value="<?=$data['hp']?>" class="form-control" id="inputEmail3" placeholder="No.HP" readonly="true">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="alamatK" class="col-sm-3 control-label">Alamat Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatK" value="<?=$data['alamatK']?>" class="form-control" id="inputEmail3" placeholder="Alamat Kantor" readonly="true">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_bon" class="col-sm-3 control-label">Tanggal Bon</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_bon" class="form-control" id="inputEmail3" placeholder="Tanggal Bon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_bayar" class="col-sm-3 control-label">Tanggal Bayar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_bayar" class="form-control" id="inputEmail3" placeholder="Tanggal Bayar">
                            </div>
                        </div>

                             <div class="form-group">
                            <label for="barang" class="col-sm-3 control-label">Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="barang" class="form-control" id="inputEmail3" placeholder="Barang">
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="total" class="col-sm-3 control-label">Total Bon</label>
                            <div class="col-sm-9">
                                <input type="text" name="total" class="form-control" id="inputEmail3" placeholder="Total Bon">
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="uangmuka" class="col-sm-3 control-label">Uang Dimuka</label>
                            <div class="col-sm-9">
                                <input type="text" name="uangmuka" class="form-control" id="inputEmail3" placeholder="Uang dimuka">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ket" class="form-control">
                                    <option value="ATK">ATK</option>
                                    <option value="Print">Print</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> OK 
                                </button>
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
    $hp=$_POST['hp'];
    $alamatK=$_POST['alamatK'];
    $tgl_bon=$_POST['tgl_bon'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $barang=$_POST['barang'];
    $total=$_POST['total'];
    $uangmuka=$_POST['uangmuka'];
    $ket=$_POST['ket'];

    //buat sql
    $sql="INSERT INTO bon VALUES ('$noP','$namaP','$hp','$alamatK','$tgl_bon','$tgl_bayar','$barang','$total','$uangmuka','$ket','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Bon Error");
    if ($query){
        echo "<script>window.location.assign('?page=bon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";

    }
    }

?>
