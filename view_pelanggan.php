<?php
	include 'koneksi.php'; 
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
            <div class="row">
				<div class="col-lg-12 text-center"> <br>
					<a class="btn btn-primary border border-light" href="add_pelanggan.php"><i class="fa-solid fa-plus"></i> Tambah Data</a>
					<h4 class="mt-5">LAPORAN DATA PELANGGAN</h4>
					<th>
						<table class="table table-striped">
							<thead>
								<tr>
								<th>No.</th>
								<th>ID Pelanggan</th>
								<th>Nama Pelanggan</th>
								<th>Alamat</th>
								<th>No. HP</th>
								<th>Action</th>
								</tr>
							</thead>
			<tbody>
				<?php
				$query="select * from tbpelanggan order by idpelanggan desc";
				$hasil=mysql_query($query);
				?>
				
				<?php
				$i=1;
				while ($data = mysql_fetch_array($hasil))
				{
					?>
					<tr>
						<td><?php echo ++$no_urut;?></td>
						<td><?php echo $data['idpelanggan']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['nohp']; ?></td>
						<td><a class="btn btn-warning btn-sm" href="edit_pelanggan.php?idpelanggan=<?php echo $data['idpelanggan']; ?>"> Edit <i class="fa-solid fa-pen-to-square"></i></a>
							<a class="btn btn-danger btn-sm" href="del_pelanggan.php?idpelanggan=<?php echo $data['idpelanggan']; ?>"> <i class="fa-solid fa-trash"></i> Delete</a></td>
								
					</tr>
					<?php
					$i++;
					$count++;
				}
					?>
					
					
			</tbody>
					
						</table>
					</th>
				</div>
				
			</div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
