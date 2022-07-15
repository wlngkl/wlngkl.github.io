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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="view_kategori.php">Kategori</a></li>
						<li class="nav-item"><a class="nav-link" href="view_produk.php">Produk</a></li>
						<li class="nav-item"><a class="nav-link" href="view_pelanggan.php">Pelanggan</a></li>
						
                      					  
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
        <div class="row"
			<div class="col-lg-6 text-left"><br/>
			
			<h5>FROM INPUT KATEGORI</H5>
			<?php
				include "koneksi.php";
				if (isset($_POST['input'])){
				$idkategori= $_POST['idkategori'];
				$namakategori= $_POST['namakategori'];
				if (empty($idkategori) || empty($namakategori))
				{
					echo"<div class='alert alert-danger'><stronge> masih ada data yang kosong!</stronge></div>";
					
				}else{
					
		mysql_query("insert into tbkategori (idkategori,namakategori) " .
			 "values('$idkategori','$namakategori')") or die(mysql_error());
		
			echo "<meta http-equiv='refresh' content='0;url=view_kategori.php'>";
				}
				}
			?>
			
				<form action="#" method="post" enctype="multipart/form-data" name="form1" class="from-horizontal">
				
				ID Kategori
				<input id="idkategori" name="idkategori"class="form-control" placeholder="ID Kategori"><br>
				
				Nama Kategori
				<input id="namakategori" name="namakategori"class="form-control" placeholder="Nama Kategori"><br>
				
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
