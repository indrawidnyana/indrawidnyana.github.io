<?php
$username   = $_POST['nama'];
$pass       = $_POST['sandi'];

include 'koneksi.php';

$user = mysqli_query($connect,"select * from akun where Nama_Pengguna='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    header("location:homepage.php");
}else
{
    header("location:login.php");
}
?>