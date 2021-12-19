<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
			$telp = $_POST['telp'];
			
			$sql = "INSERT INTO user(userId,userPass,userName,userAlamat,userEmail,userTelp,level)
					VALUE('$id',MD5('$password'),'$username','$alamat','$email','$telp','2')";
					
			if(mysqli_query($connect, $sql)){
				echo "Record berhasil dibuat";?>
				<a href="form.php">Daftar Lain</a>
				<?php
			}
			else{
				echo "Record gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>