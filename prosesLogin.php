<?php
	include "koneksi.php";
	
	$username = $_POST['username'];
    $password = md5($_POST['password']);
	
	$query="SELECT * FROM user WHERE userName='$username' and userPass='$password'";
	$result=mysqli_query($connect,$query);
	$row = mysqli_fetch_assoc($result);
	
	if($row['level'] == 1){
		header('location: homeAdmin.html');?>
		<?php
	}
	else if ($row['level'] == 2){
		header('location: homeUser.html');?>
		<?php
	}
	else{
		echo "Anda gagal login. silahkan ";?>
		<a href="index.html">Login Kembali</a>
		<?php
		echo mysqli_error($connect);
	}
?>