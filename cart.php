<?php
	include "koneksi.php";
	if($_GET['id']){
		$sql1 = "SELECT * FROM produk WHERE produkId = '".$_GET['id']."' ";
		
		$satu = mysqli_query($connect, $sql1);
		$data = mysqli_fetch_array($satu);
		
		$id = $data['produkId'];
		$nama = $data['produkNama'];
		$harga = $data['produkHarga'];
		
		$sql2 = "INSERT INTO shoppingcart(produkId, nama, harga)
						VALUE('$id','$nama','$harga')";
						
		$dataMasuk = mysqli_query($connect, $sql2);
	}
	$sql3 = "SELECT SUM(harga) AS harga FROM shoppingcart";
	$dua = mysqli_query($connect, $sql3);
	$hasil = mysqli_fetch_array($dua);
	$total = $hasil['harga'];
?>
<html>
	<head>
		<title>Produk</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			h1{
				color : white;
				text-align : center;
				margin-top : 10px;
			}
			body{
				background-image: url('img/12.jpg');
				background-repeat: repeat-y;
				width: 100%;
				height: 100%;
				overflow-x : hidden;
			}
			nav{
				background: #1c1c1c;
			}
			.box{
				left : 50%;
			}
			.table{
				width : 80%;
				margin-top : 20px;
				margin-left: auto;
  				margin-right: auto;
				color : #fff;
			}
			.tambah{
				font-size: 25px;
				color: black;
				text-align: left;
			}
		</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand" href="homeUser.html">XBIKE</a>
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
						<a class="nav-link" href="produkUser.php">Shopping</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php?id=0">Shopping Cart</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="containerform">
			<div class="masuk">
				<h1>SHOPPING CART<h1>
				<div class="box">
					<table class="table table-hover table-dark">
						<thead>
							<tr>
								<th width="40px">No</th>
								<th>Id Produk</th>
								<th>Nama</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include "koneksi.php";
								$no = 1;
								$produk = mysqli_query($connect, "SELECT * FROM shoppingcart");
								if(mysqli_num_rows($produk) > 0){
								while($row = mysqli_fetch_array($produk)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $row['produkId'] ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td><?php echo $row['harga'] ?></td>
							</tr>
						</tbody>
								<?php }}else{ ?>
									<tr>
										<td colspan="7">Data Masih Kosong</td>
									</tr>
								<?php } ?>
					</table>
					<p>total harga : <?php echo $total ?></p>
				</div>
				<a href="hapusCart.php?id=0">
				<button class="btn btn-danger">CHECKOUT</button>
				</a>
			</div>
		</div>
	</body>
</html>