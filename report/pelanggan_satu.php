<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pelanggan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pelanggan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI BON BMT SEJAHTERA TANJUNGBALAI </h2>
                        <h4>Jl. Pahlawan No. 13/27 Kota Tanjungbalai Hp. 085261376968</h4>
                        <hr>
                        <h3>DATA PELANGGAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor Pelanggan</td> <td><?= $data['noP'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['namaP'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Alamat</td> <td><?= $data['alamatP'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td> <td><?= $data['hp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Kantor</td> <td><?= $data['kantor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Kantor</td> <td><?= $data['alamatK'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Tanjungbalai   <?= date("d-m-Y") ?>
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