<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Bon Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM bon WHERE id='" . $_GET ['id'] . "'";
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
                            <td>Nomor HP</td> <td><?= $data['hp'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat Kantor</td> <td><?= $data['alamatK'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Bon</td> <td><?= $data['tgl_bon'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Bayar</td> <td><?= $data['tgl_bayar'] ?></td>
                        </tr>
                        <tr>
                            <td>Barang</td> <td><?= $data['barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Bon</td> <td>Rp. <?= $data['total'] ?></td>
                        </tr>
                        <tr>
                            <td>Uang Dimuka</td> <td>Rp. <?= $data['uangmuka'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=bon&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Catatan Bon </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

