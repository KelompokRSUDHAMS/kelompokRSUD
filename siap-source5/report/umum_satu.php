<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Rujukan Umum</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onLoad="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM umum WHERE no_rujukan='" . $_GET ['no_rujukan'] . "'";
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
                        <h2>Sistem Informasi Arsip Pengadilan Negeri Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Umum</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor Rujukan</td> <td><?= $data['no_rujukan'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Berobat</td> <td><?= $data['tgl_berobat'] ?></td>
                                </tr>
								<tr>
                                    <td>Penerima</td> <td><?= $data['penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>Poli</td> <td><?= $data['poli'] ?></td>
                                </tr>
								<tr>
                                    <td>Dokter</td> <td><?= $data['dokter'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kasubag Rekam Medis<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>