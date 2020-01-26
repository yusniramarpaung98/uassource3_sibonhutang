<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pelanggan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Pelanggan</td> <td><?= $data['noP'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['namaP'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                        </tr>
                         <tr>
                            <td>Alamat Pelanggan</td> <td><?= $data['alamatP'] ?></td>
                        </tr>
                         <tr>
                            <td>Nomor HP</td> <td><?= $data['hp'] ?></td>
                        </tr>
                         <tr>
                            <td>Nama Kantor</td> <td><?= $data['kantor'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pelanggan</td> <td><?= $data['alamatK'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pelanggan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

