<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$keterangan = $_POST['keterangan'];
			$id = $_POST['id'];
			
			$filename = $_FILES['gambar']['name'];
			$tmp_name = $_FILES['gambar']['tmp_name'];
			
			$type1 = explode('.', $filename);
			$type2 = $type1[1];
			$namaBaru = 'produk'.time().'.'.$type2;
			
			$tipeFile = array('jpg','jpeg','png','gif');
			
			$gambar = "SELECT gambar FROM produk WHERE produkId = '".$id."'";
			$produk = mysqli_query($connect, $gambar);
			$p = mysqli_fetch_object($produk);
			
			unlink('produk/'.$p->gambar);
		
			if(!in_array($type2, $tipeFile) === true){
				echo '<script>alert("Format File Salah")</script>';
			}
			else{
				move_uploaded_file($tmp_name, 'produk/'.$namaBaru);
				
				$sql = "UPDATE produk SET produkNama = '$nama', produkHarga = '$harga', keterangan = '$keterangan', gambar = '$namaBaru' WHERE produkId = '$id'";
				
				if(mysqli_query($connect, $sql)){
					echo "Record berhasil diedit";?>
					<a href="produk.php">Kembali Ke Halaman Produk</a>
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