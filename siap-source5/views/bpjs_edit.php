<?php
$no_rujukan=$_GET['no_rujukan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM bpjs WHERE no_rujukan ='$no_rujukan'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Rujukan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_rujukan" class="col-sm-3 control-label">Nomor Rujukan</label>
                            <div class="col-sm-9 col-xs-9">
							<input type="text" name="no_rujukan" value="<?=$data['no_rujukan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rujukan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" value="<?=$data['nama_pasien']?>"class="form-control" id="inputEmail3" placeholder="Nama Pasien">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_berobat" class="col-sm-3 control-label">Tanggal Berobat</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_berobat" value="<?=$data['tgl_berobat']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Berobat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>"class="form-control" id="inputEmail3" placeholder="Penerima Berkas">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="poli" class="col-sm-3 control-label">Poli</label>
                            <div class="col-sm-9">
                                <input type="text" name="poli" value="<?=$data['poli']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="dokter" class="col-sm-3 control-label">Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="dokter" value="<?=$data['dokter']?>"class="form-control" id="inputEmail3" placeholder="Dokter" >
                            </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=bpjs&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Rujukan
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
    $sql="UPDATE bpjs SET nama_pasien='$nama_pasien',tgl_berobat='$tgl_berobat',penerima='$penerima',poli='$poli',
	dokter='$dokter' WHERE no_rujukan ='$no_rujukan'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=bpjs&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



