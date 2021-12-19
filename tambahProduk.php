<html>
	<head>
		<title>Produk</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body{
				color : #fff;
			}
			h1{
				margin-top : 10px;
			}
			label{
				font-size : 20px;
			}
			.containerform{
				background-image: url('img/7.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
				background-size: 100%;
				margin-bottom: 0px;
				padding-bottom: 0px;
			}
			.masuk{
				height: 100%;
				width: 100%;
				background: rgba(0, 0, 0, 0.7);
				position: absolute;
				color : #ffffff;
			}
			nav{
				background: #1c1c1c;
			}
			.form-outline{
				margin-top : 20px;
				margin-left : 20px;
			}
			button{
				margin-left : 20px;
			}
		</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand" href="homeAdmin.html">XBIKE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Information.html">Information</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Shopping</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="containerform">
			<div class="masuk">
				<h1 style="text-align : center;">Data Barang<h1>
				<form enctype="multipart/form-data" method="POST" action="insertData.php">
					<div class="form-outline mb-4">
						<label>Nama Barang</label>
						<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama barang" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Harga Barang</label>
						<input type="text" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="harga barang" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Keterangan Barang</label>
						<textarea name="keterangan" rows="5" class="form-control" id="exampleFormControlInput1" placeholder="keterangan barang" style="width: 400px;"></textarea>
					</div>
					<div class="form-outline mb-4">
						<label>Gambar Barang</label>
						<input type="file" name="gambar" class="form-control" style="width: 400px; height : 43px;">
					</div>
					<button type="submit" name="simpan" class="btn btn-primary btn-danger" style="width: 200px;">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>