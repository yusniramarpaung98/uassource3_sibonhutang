<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pelanggan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI BON BMT SEJAHTERA TANJUNGBALAI </h2>
                        <h4>Jl. Pahlawan No. 13/27 Kota Tanjungbalai Hp. 085261376968</h4>
                        <hr>
                        <h3>DATA SELURUH PELANGGAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="17%"><center>Nomor Pelanggan</center></th><th><center>Nama</center></th><th width="15%"><center>Jenis Kelamin</center></th><th>Alamat</th><th width="10%"><center>Nomor HP</center></th><th width="10%"><center>Nama Kantor</center></th><th width="10%"><center>Alamat Kantor</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pelanggan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['noP'] ?></td>
                                    <td><?= $data['namaP'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['alamatP'] ?></td>
                                    <td><?= $data['hp'] ?></td>
                                    <td><?= $data['kantor'] ?></td>
                                    <td><?= $data['alamatK'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Indra BMT<strong></u><br>
                                        BMT SEJAHTERA
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>