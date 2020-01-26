<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pelanggan</h3>
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
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamatP" class="col-sm-3 control-label">Alamat Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatP" value="<?=$data['alamatP']?>"class="form-control" id="inputEmail3" placeholder="Alamat Pelanggan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hp" class="col-sm-3 control-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" value="<?=$data['hp']?>"class="form-control" id="inputEmail3" placeholder="No.HP">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kantor" class="col-sm-3 control-label">Nama Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="kantor" value="<?=$data['kantor']?>"class="form-control" id="inputEmail3" placeholder="Nama Kantor">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamatK" class="col-sm-3 control-label">Alamat Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatK" value="<?=$data['alamatK']?>"class="form-control" id="inputEmail3" placeholder="Alamat Kantor">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pelanggan</button>
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
    $sql="UPDATE pelanggan SET noP = '$noP', namaP='$namaP', jk='$jk',alamatP='$alamatP', hp='$hp', kantor='$kantor',  alamatK='$alamatK' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



