<?php
	include 'koneksi.php';
	
	if(isset($_GET['idp'])){
		$gambar = "SELECT gambar FROM produk WHERE produkId = '".$_GET['idp']."'";
		$produk = mysqli_query($connect, $gambar);
		$p = mysqli_fetch_object($produk);
		
		unlink('produk/'.$p->gambar);
		
		$sql = "DELETE FROM produk WHERE produkId = '".$_GET['idp']."'";
		$delete = mysqli_query($connect, $sql);
		echo '<script> window.location="produk.php"</script>';
	}
?>