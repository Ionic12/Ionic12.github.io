<html>
	<head>
	<title>XBIKE</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body{
				color : #ffffff;
			}
			table{
				color: #ffffff;
			}
			h1{
				margin-top : 10px;
			}
			.containerform{
				background-image: url('img/7.jpg');
				transition: background 4s;
				background-repeat: no-repeat;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
				background-size: 100%;
				margin-bottom: 0px;
				padding-bottom: 0px;
			}
			.containerform:hover{
				background-image: url('img/11.jpg');
				transition: background 4s;
				background-repeat: no-repeat;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
				background-size: 100%;
				margin-bottom: 0px;
				padding-bottom: 0px;
			}
			.masuk{
				text-align: center;
				padding-left: 20px;
				padding-right: 20px;
				height: 100%;
				width: 100%;
				background: rgba(0, 0, 0, 0.6);
				position: absolute;
			}
			button{
				width : 175px;
				height : 40px;
				font-size 15px;
				left : 0;
				transform : translate(-372%,0%);
			}
			nav{
				background: #1c1c1c;
			}
			table{
				margin-top : 10px;
			}
		</style>
	</head>
	<body>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark">
			<a class="navbar-brand" href="homeAdmin.html">XBIKE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="aboutUs.html">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Information.html">Information</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produk.php">Product</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="containerform">
			<div class="masuk">
				<h1>Data Barang<h1>
				<div class="box">
				<br>
				<button onclick="window.location.href='tambahProduk.php';" class="btn btn-danger">Tambah Produk</button>
					<table class="table table-hover table-dark">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Produk</th>
								<th>Gambar</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include "koneksi.php";
								$no = 1;
								$produk = mysqli_query($connect, "SELECT * FROM produk ORDER BY produkId ASC");
								if(mysqli_num_rows($produk) > 0){
								while($row = mysqli_fetch_array($produk)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $row['produkId'] ?></td>
								<td><img src="img/<?php echo $row['gambar'] ?>" height="100px" width="100px"></td>
								<td><?php echo $row['produkNama'] ?></td>
								<td><?php echo $row['produkHarga'] ?></td>
								<td><?php echo $row['keterangan'] ?></td>
								<td>
									<a href="editProduk.php?id=<?php echo $row['produkId'] ?>">Edit</a> || <a href="
									prosesHapus.php?idp=<?php echo $row['produkId'] ?>">Hapus</a>
								</td>
							</tr>
						</tbody>
								<?php }}else{ ?>
									<tr>
										<td colspan="7">Data Masih Kosong</td>
									</tr>
								<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>