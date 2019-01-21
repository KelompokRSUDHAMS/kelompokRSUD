<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Rujukan BPJS</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_rujukan" class="col-sm-3 control-label">Nomor Rujukan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rujukan"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rujukan" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
							 <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pasien">
                            </div>
                         </div>
						    <div class="form-group">
                            <label for="tgl_berobat" class="col-sm-3 control-label">Tanggal Berobat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_berobat" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Berobat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff penerima Berkas" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="poli" class="col-sm-3 control-label">Poli</label>
                            <div class="col-sm-9">
                                <input type="text" name="poli" class="form-control" id="inputPassword3" placeholder="Inputkan Poli" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="dokter" class="col-sm-3 control-label">Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="dokter" class="form-control" id="inputPassword3" placeholder="Inputkan Dokter">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=bpjs&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Rujukan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$no_rujukan=$_POST['no_rujukan'];
  $nama_pasien=$_POST['nama_pasien'];
  $tgl_berobat=$_POST['tgl_berobat'];
  $penerima=$_POST['penerima'];
	$poli=$_POST['poli'];
	$dokter=$_POST['dokter'];
    //buat sql
    $sql="INSERT INTO bpjs VALUES ('$no_rujukan','nama_pasien','$tgl_berobat','$penerima','$poli','$dokter')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=bpjs&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
