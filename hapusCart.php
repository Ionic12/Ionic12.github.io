<?php
	include 'koneksi.php';
	
	if(isset($_GET['id'])){
		$sql = "DELETE FROM shoppingcart";
		$delete = mysqli_query($connect, $sql);
		echo '<script> window.location="cart.php?id=0"</script>';
	}
?>