<?php
//membuat query untuk hapus data
$sql="DELETE FROM umum WHERE no_rujukan ='".$_GET['no_rujukan']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=umum&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=umum&actions=tampil');</scripr>";
}

