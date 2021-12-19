<html>
	<head>
		<title>Produk</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body{
				background-color : #000;
			}
			h1{
				margin-top : 10px;
				color : #FFF;
				text-align : center;
			}
			nav{
				background: #1c1c1c;
			}
			.container{
				width : 100%;
			}
			.box{
				width : 100%;
			}
			.col-4{
				position: relative;
				height: 350px;
    			width: 350px;
				color : #FFFFFF;
				text-align: center;
				font-size: 20px;
				border : 3px solid #FFF;
				border-radius : 20px;
				transform-style: preserve-3d;
				opacity: 1;
				float : left;
				margin : 10px;
			}
			.col-4 .nama{
				color: #FFF;
				float: mid;
				margin-bottom: 5px;
				transform: translate3d(0%,0%,80px);
			}
			.col-4 .harga{
				font-weight: bold;
				color: #FFF;
				float: mid;
				transform: translate3d(0%,0%,80px);
			}
			.bike-img{
				transform: translate3d(0%,10%,100px);
				transition: 0.5s;
			}
			.col-4:hover .bike-img{
				transform: translate(0%,10%,100px) scale(2.0);
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
			<div class="section">
				<div class="container">
					<h1>Product</h1>
					<div class="box">
						<?php
							include "koneksi.php";
							$produk = mysqli_query($connect, "SELECT * FROM produk ORDER BY produkId DESC LIMIT 8");
							if(mysqli_num_rows($produk) > 0){
								while($p = mysqli_fetch_array($produk)){
						?>
							<a href="cart.php?id=<?php echo $p['produkId'] ?>">
								<div class="col-4">
									<img class="bike-img" src="img/<?php echo $p['gambar'] ?>" height="260px" width="260px">
									<p class="nama"> <?php echo $p['produkNama'] ?></p>
									<p class="harga"><?php echo $p['produkHarga'] ?></p>
								</div>
							</a>
							<?php }} else{ ?>
								<p>Produk tidak ada</p>
							<?php }?>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
		<script type="text/javascript">
			VanillaTilt.init(document.querySelectorAll(".col-4"), {
			max: 25,
			speed: 400
		});;
		</script>
	</body>
</html>