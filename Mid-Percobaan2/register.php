<?php
	//global $link;
	
	if (isset($_POST['kirim'] )) {
		
		//include("db_connect.php");
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db   = "db_ukm_boddhivija";
		
		$link = new mysqli($host, $user, $pass, $db) or die(mysql_error());
		
		$nama = $_POST['nama'];
		$nim  = $_POST['nim'];
		$jurusan = $_POST['jurusan'];
		$alamat = $_POST['alamat'];
		$hp  = $_POST['hp'];
		$email = $_POST['e-mail'];
		
		$query = "INSERT INTO pendaftar (nama, jurusan, alamat, nim, telp, email, tgl_daftar) VALUES('$nama', '$jurusan', '$alamat', '$nim', '$hp', '$email', '".date("Y-m-d")."')";
		
		//$res = mysqli_query($query);
		
		$res = $link->query($query);
		
		if (!$res) {
			die(mysql_error);
		} else {
			header("location: form.html");
		}
	}
?>