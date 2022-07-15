<?php
include "koneksi.php";
$idkategori = $_GET['idkategori'];
$myquery = "DELETE FROM tbkategori WHERE idkategori='$idkategori' LIMIT 1";
$hapus = mysql_query($myquery) or die ("Gagal menghapus");
header("location:view_kategori.php");
?>