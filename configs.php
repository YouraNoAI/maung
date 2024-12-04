<?php
require 'functions.php';
// Setoran Sampah
$setoran = query("SELECT * FROM setoran ORDER BY idSetor ASC");

// Informasi Sampah
$jumlahBeritaPerhalaman = 6;
$jumlahBerita = count(query("SELECT * FROM berita"));
$jumlahHalaman = ceil($jumlahBerita / $jumlahBeritaPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalBerita = ($jumlahBeritaPerhalaman * $halamanAktif) - $jumlahBeritaPerhalaman;
$halamanAktif = intval($halamanAktif);

$postingan = query("SELECT * FROM berita ORDER BY idBerita LIMIT $awalBerita, $jumlahBeritaPerhalaman");

// Login
session_start();

	if ( isset($_POST["login"]) ){

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $data_admin = mysqli_query($conn, "SELECT * FROM admins WHERE usernameAdmin = '$username' AND passwordAdmin = '$password'");
        $data_nasabah = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND passwordUser = '$password'");

        $cek_user = mysqli_num_rows($data_nasabah);
        $cek_admin = mysqli_num_rows($data_admin);

        if($cek_admin > 0) {
          $a = mysqli_fetch_array($data_admin);
          // admin
          $IdAdmin = $a['IdAdmin'];
          $nama_a = $a['namaAdmin'];
          $username_a = $a['usernameAdmin'];
          $password_a = $a['passwordAdmin'];
          $level_a = $a['level'];
          $cek_admin = mysqli_num_rows($data_admin);
        } elseif ($cek_user > 0) {
          $n = mysqli_fetch_array($data_nasabah);
          // nasabah
          $id_n = $n['idUser'];
          $nama_n = $n['namaUser'];
          $nik_n = $n['nik'];
          $alamat = $n['alamat'];
          $telepon_n = $n['telepon'];
          $username_n = $n['username'];
          $password_n = $n['passwordUser'];
          $jmlSetoran = $n['jmlSetoran'];
          $saldo = $n['saldo'];
          $cek_user = mysqli_num_rows($data_nasabah);
        } else {
          echo "
            <script>
            alert('Maaf username dan password tidak valid!');
            document.location.href ='login.php';
            </script>
          ";
        }


        if ($username == "" || $password == "") {
            echo "
            <script>
                alert('Username dan Password tidak boleh kosong!');
                document.location.href ='login.php';
            </script>
            ";
        }
        else {
            if ($cek_admin > 0) {
        $_SESSION['IdAdmin'] = $IdAdmin;
        $_SESSION['namaAdmin'] = $nama_a;
        $_SESSION['usernameAdmin'] = $username_a;
        $_SESSION['passwordAdmin'] = $password_a;
        $_SESSION['level'] = $level_a;
        $_SESSION["login"] = true;
        //cek remember me
				if ( isset($_POST['remember']) ){
					//buat cookie
					setcookie('login', 'true', time()+60);
				}
        echo "
        <script>
        alert('Selamat Anda berhasil login!');
        document.location.href ='admin.php';
        </script>
        ";
        }
        else if ($cek_user > 0) {
        $_SESSION['idUser'] = $id_n;
        $_SESSION['namaUser'] = $nama_n;
        $_SESSION['nik'] = $nik_n;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['telepon'] = $telepon_n;
        $_SESSION['username'] = $username_n;
        $_SESSION['passwordUser'] = $password;
        $_SESSION['jmlSetoran'] = $jmlSetoran;
        $_SESSION['saldo'] = $saldo;
        $_SESSION["login"] = true;
        //cek remember me
				if ( isset($_POST['remember']) ){
					//buat cookie
					setcookie('login', 'true', time()+60);
				}
        echo "
        <script>
            alert('Selamat Anda berhasil login!');
            document.location.href ='user.php';
        </script>
        ";
        }

        else {
        echo "
        <script>
        alert('Maaf username dan password tidak valid!');
        document.location.href ='login.php';
        </script>
        ";
	    }
    }
}

// Registrasi

if(isset($_POST["register"]) ) {

    if ( registrasi($_POST) > 0 ){
        echo "<script>
                alert('User baru berhasil ditambahkan!');
              </script>";
        echo "<script>
                window.location.href='login.php'
            </script";
    } else {
        echo mysqli_error($conn);
    }
}


?>