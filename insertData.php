<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$keterangan = $_POST['keterangan'];
			
			$filename = $_FILES['gambar']['name'];
			$tmp_name = $_FILES['gambar']['tmp_name'];
			
			$type1 = explode('.', $filename);
			$type2 = $type1[1];
			$namaBaru = 'produk'.time().'.'.$type2;
			
			$tipeFile = array('jpg','jpeg','png','gif');
			
			if(!in_array($type2, $tipeFile) === true){
				echo '<script>alert("Format File Salah")</script>';
			}
			else{
				move_uploaded_file($tmp_name, 'img/'.$namaBaru);
				
				$sql = "INSERT INTO produk(produkNama, produkHarga, keterangan, gambar)
					VALUE('$nama','$harga','$keterangan','$namaBaru')";
				
				if(mysqli_query($connect, $sql)){
					header('location: produk.php');?>
					<?php
				}
				else{
					echo "Record gagal dibuat <br>" . mysqli_error($connect);
				}
				mysqli_close($connect);
			}
		?>
	</body>
</html>