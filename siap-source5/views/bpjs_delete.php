<?php
//membuat query untuk hapus data
$sql="DELETE FROM bpjs WHERE no_rujukan ='".$_GET['no_rujukan']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=bpjs&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=bpjs&actions=tampil');</scripr>";
}

