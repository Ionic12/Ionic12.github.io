<html>
	<head>
		<title>XBIKE</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			.containerform{
				text-align: center;
			}
			.masuk{
				left : 50%;
				transform: translate(-50%,0);
				height: 100%;
				width: 40%;
				background: #1c1c1c;
				position: absolute;
				color : #ffffff;
			}
			nav{
				background: #1c1c1c;
			}
			input{
				transform: translate(117%,0);
			}
			button{
				left : 100%;
				transform: translate(117%,0);
			}
			#myVideo {
				position: fixed;
				left: 0%;
				min-width: 100%;
   			 	min-height: 100%;
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
						<a class="nav-link" href="index.html">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="form.php">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="aboutUs.html">About Us</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="containerform">
			<video autoplay muted loop id="myVideo">
				<source src="img/myvideo.mp4" type="video/mp4">
			</video>
			<div class="masuk">
				<h1>Register</h1>
				<form action="prosesPendaftaran.php" method="post">
					<div class="form-outline mb-4">
						<label>Username</label>
						<input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="username" style="width: 200px;">
					</div>
					<div class="form-outline mb-4">
						<label>Password</label>
						<input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password" style="width: 200px;">
					</div>
					<div class="form-outline mb-4">
						<label>User ID</label>
						<input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="username" style="width: 200px;">
					</div>
					<div class="form-outline mb-4">
						<label>Email</label>
						<input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="password" style="width: 200px;">
					</div>
					<div class="form-outline mb-4">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="username" style="width: 200px;">
					</div>
					<div class="form-outline mb-4">
						<label>No Telepon</label>
						<input type="password" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="password" style="width: 200px;">
					</div>
					<button type="submit" name="simpan" class="btn btn-primary btn-block" style="width: 200px;">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>