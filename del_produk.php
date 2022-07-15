<?php
include "koneksi.php";
$idproduk = $_GET['idproduk'];
$myquery = "DELETE FROM tbproduk WHERE idproduk='$idproduk' LIMIT 1";
$hapus = mysql_query($myquery) or die ("Gagal menghapus");
header("location:view_produk.php");
?>