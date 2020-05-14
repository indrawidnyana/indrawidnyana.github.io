<?php 
        require_once "koneksi.php";
        session_start();
        if (empty($_SESSION['Nama_Pengguna'])) {
            header("Location:login.php");
        }
        $KENA=$_SESSION['Nama_Pengguna'];

              
        include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'images/profil/'.$nama);
					$query = mysqli_query($koneksi, "UPDATE akun SET photo='$nama' WHERE Nama_Pengguna='$KENA'");
					if($query){
                        echo 'FILE BERHASIL DI UPLOAD';
                        header("location:profil.php");
					}else{
                        echo 'GAGAL MENGUPLOAD GAMBAR';
                        $url ="profil.php"; 
                        $time_out = 2;
                        header("refresh: $time_out; url=$url");
					}
				}else{
                    echo 'UKURAN FILE TERLALU BESAR';
                    $url ="profil.php";
                    $time_out = 2;
                    header("refresh: $time_out; url=$url");
				}
			}else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                $url ="profil.php"; 
                    $time_out = 2; 
                    header("refresh: $time_out; url=$url");
			}
		}
		?>
 
