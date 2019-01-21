<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Rujukan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM umum WHERE no_rujukan ='" . $_GET ['no_rujukan'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                    	<tr>
                            <td>Nomor Rujukan</td> <td><?= $data['no_rujukan'] ?></td>
                        </tr>
               			<tr>
                            <td>Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Berobat</td> <td><?= $data['tgl_berobat'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Penerima Berkas</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Poli Yang Dituju</td> <td><?= $data['poli'] ?></td>
                        </tr>
						<tr>
                            <td>Dokter</td> <td><?= $data['dokter'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=umum&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Rujukan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

