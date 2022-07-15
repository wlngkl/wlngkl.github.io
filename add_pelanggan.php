<?php 
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Penjualan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="container">
                <a class="navbar-brand text-dark" href="#"><i class="fa-solid fa-shop"></i> Penjualan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="view_kategori.php">Kategori</a></li>
						<li class="nav-item"><a class="nav-link" href="view_produk.php">Produk</a></li>
						<li class="nav-item"><a class="nav-link active" href="view_pelanggan.php">Pelanggan</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
        <div class="row"
			<div class="col-lg-6 text-left"><br/>
			
			<h5>FROM INPUT PELANGGAN</h5>
			<?php
				
				if (isset($_POST['input'])){
				$idpelanggan= $_POST['idpelanggan'];
				$nama= $_POST['nama'];
				$alamat= $_POST['alamat'];
				$nohp= $_POST['nohp'];
				if (empty($idpelanggan) || empty($nama) || empty($alamat) || empty($nohp))
				{
					echo"<div class='alert alert-danger'><strong> masih ada data yang kosong!</strong></div>";
							
				}else{
					
		mysql_query("insert into tbpelanggan (idpelanggan,nama,alamat,nohp) " .
			 "values('$idpelanggan','$nama','$alamat','$nohp')") or die(mysql_error());
		
			echo "<meta http-equiv='refresh' content='0;url=view_pelanggan.php'>";
				}
				}
			?>
			
				<form action="#" method="post" enctype="multipart/form-data" name="form1" class="from-horizontal">
				
				ID PELANGGAN
				<input id="idpelanggan" name="idpelanggan"class="form-control" placeholder="ID PELANGGAN"><br>
				
				NAMA PELANGGAN
				<input id="nama" name="nama"class="form-control" placeholder="NAMA PELANGGAN"><br>
				
				Alamat
				<input id="alamat" name="alamat"class="form-control" placeholder="Alamat"><br>
				
				No. HP
				<input id="nohp" name="nohp"class="form-control" placeholder="No. HP"><br>
				
				<button name="input" type="submit" class="btn btn-success">SIMPAN</button>
				
				</form>
			</div>
			</div>
				</div>
				
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
