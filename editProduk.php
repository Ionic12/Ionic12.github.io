<html>
	<head>
		<title>Tambah Barang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajac/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			.containerform{
				background-image: url('img/bgLogin.jpg');
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
				background: rgba(255, 255, 255, 0.7);
				position: absolute;
			}
			.navbar{
				background-image: url('img/bgNav.jpg');
				background-repeat: no-repeat;
				background-attachment: absolute;
				background-position: center;
				width: 100%;
				background-size: 100%;
			}
			.button1 {
				display: inline-block;
				background : #EC4D37;
				border : 3px solid #1C1C1C;
				border-radius: 50px;
				color: #FFFFFF;
				text-align: center;
				font-size: 14px;
				width: 124px;
				height : 40px;
				transition: all 0.5s;
				cursor: pointer;
				margin-right: 5px;
				margin-bottom: 5px;
				transform: translate(295%, 20%);
			}
			.button1 span {
				cursor: pointer;
				display: inline-block;
				position: relative;
				transition: 0.5s;
			}
			.button1 span:after {
				content: '\00bb';
				position: absolute;
				opacity: 0;
				top: 0;
				right: -20px;
				transition: 0.5s;
			}
			.button1:hover span {
				padding-right: 25px;
			}
			.button1:hover span:after {
				opacity: 1;
				right: 0;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-md bg-transparent navbar-light">
			<a class="navbar-brand" href="aboutUs.html">XBIKE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<button onclick="window.location.href='aboutUs.html';" class="button button1"><span>About Us</span></button>
					</li>
					<li class="nav-item">
						<button onclick="window.location.href='list.html';" class="button button1"><span>Explore</span></button>
					</li>
					<li class="nav-item">
						<button onclick="window.location.href='form.html';" class="button button1"><span>Form</span></button>
					</li>
					<li class="nav-item">
						<button onclick="window.location.href='index.php';" class="button button1"><span>Log Out</span></button>
					</li>
				</ul>
			</div>
		</nav>
		<div class="containerform">
			<div class="masuk">
				<h3>Edit Data Barang<h3>
				<table>
					<form enctype="multipart/form-data" method="POST" action="editData.php">
						<tr>
							<td>Id Barang  </td>
							<td><input type="text" name="id" size="50" value="<?php echo $_GET['id'] ?>"></td>
						</tr>
						<tr>
							<td>Nama Barang  </td>
							<td><input type="text" name="nama" size="50"></td>
						</tr>
						<tr>
							<td>Harga Barang </td>
							<td><input type="text" name="harga" size="50"></td>
						</tr>
						<tr>
							<td>Keterangan  </td>
							<td><textarea name="keterangan" rows="5" cols="53"></textarea></td>
						</tr>
						<tr>
							<td>Gambar  </td>
							<td><input type="file" name="gambar"></td>
						</tr>
						<tr>
							<td><input type="submit" name="log" value="Kirim"></td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</body>
</html>