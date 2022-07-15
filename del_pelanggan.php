<?php
include "koneksi.php";
$idpelanggan = $_GET['idpelanggan'];
$myquery = "DELETE FROM tbpelanggan WHERE idpelanggan='$idpelanggan' LIMIT 1";
$hapus = mysql_query($myquery) or die ("Gagal menghapus");
header("location:view_pelanggan.php");
?>