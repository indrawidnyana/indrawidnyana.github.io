<?php
    require_once "koneksi.php";
    session_start();
    if (empty($_SESSION['Nama_Pengguna'])) {
        header("Location:login.php");
	}
	$nama = $_SESSION['Nama_Pengguna'];
	//$data = mysqli_query($koneksi,"select * from akun where Nama_Pengguna='$nama' and password='$hash'");
	//$cek = mysqli_num_rows($data);
    $foto = mysqli_query($koneksi,"SELECT photo FROM akun WHERE Nama_Pengguna='$nama'");

    $row = mysqli_fetch_assoc($foto);
    echo $row['photo'];
    
?>