<?php
	/**
	*  Created By OutAttacker00t
	*/
	class Travel
	{
		
		public function Login($email, $password)
		{
			# code...
			global $db;

			$username = $email;
			$passw0t = $password;

			$login = mysqli_query($db, "SELECT * FROM kustomer WHERE email='$username' , password='$passw0t' ");
			$ketemu = mysqli_num_rows($login);
			$cok = mysqli_fetch_array($login);

			if ($ketemu < 1) {
				# code...
				session_start();

				$_SESSION['namauser'] = $cok['email'];
				$_SESSION['namalengkap'] = $cok['nama_lengkap'];
				$_SESSION['passuser'] = $cok['password'];

				$sid_lama = session_id();

				session_regenerate_id();

				$sid_baru = session_id();

				echo "<script>alert('Selamat Datang $_SESSION[namalengkap]'); window.location = 'index.php'</script>";
				header('location:index.php');
			}
			else
			{
				echo "<script>alert('Email atau Password Anda Salah'); window.location = 'index.php' ";
			}
		}

		public function daftar($nama, $email, $password, $nohp, $kota, $alamat)
		{
			global $db;

			session_start();

			$kar1=strstr($email, "@");
			$kar2=strstr($email, ".");

			$cek_email = mysqli_num_rows(mysqli_query($db, "SELECT email FROM kustomer WHERE email = '$email' "));

			if ($cek_email > 0) {
				# code...
				echo "<script>alert('Email yang Anda Daftarkan sudah digunakan'); window.location = 'index.php' </script>";
				echo "<meta http-equiv='refresh' content='0; url=?hal=login'>";
			}
			elseif (empty($nama) || empty($email) || empty($password) || empty($nohp) || empty($kota) || empty($alamat)) {
				# code...
				echo "<script>alert('Masih Ada Data Yang Kosong, Silahkan Melengkapi'); window.location = '?hal=login' ";
				echo "<meta http-equiv='refresh' content='0; url=?hal=login'>";
			}
			elseif (strlen($kar1)==0 OR strlen($kar2)==0)
			{
				# code...
				echo "<script>alert('Alamat Email Yang Anda Masukkan Tidak Valid'); window.location = '?hal=login' ";
				echo "<meta http-equiv='refresh' content='0; url=?hal=login'>";
			}
			else
			{
				function isi_keranjang()
				{
					$isikeranjang = array();
					$sid = session_id();
					$sql = mysqli_query($db, "SELECT * FROM orders_temp WHERE id_session='$sid'");
					
					while ($r=mysqli_fetch_array($sql)) {
						$isikeranjang[] = $r;
					}
					return $isikeranjang;
				}

				function antiinjection($data)
				{
					$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
				  	return $filter_sql;
				}

				$tgl_sekarang = date("D:m:y");
				$jam_sekarang = date("H:i:s");

				$jeneng = antiinjection($nama);
				$mailer = antiinjection($email);
				$passw0t = antiinjection($password);
				$nope = antiinjection($nohp);
				$jancok = antiinjection($kota);
				$memex = antiinjection($alamat);

				$telaso = mysqli_query($db, "INSERT INTO kustomer(nama_lengkap, password, alamat, telpon, email, id_kota) 
             								VALUES('$jeneng','$passw0t','$memex','$nope','$mailer','$jancok')");

				echo "<script>window.alert('Pendaftaran Berhasil, Klok OK untuk melanjtkan')</script>";
 				echo "<meta http-equiv='refresh' content='0; url=signup.php'>";
			}
		}

		public function caraBeli($carbel, $aidi)
		{
			global $db;

			$cara = mysqli_query($db, "UPDATE modul SET static_content = '$carbel' WHERE id_modul = '$aidi' ");

			echo "<script>alert('Update Berhasil'); window.location = 'mimin.php?min=carabeli'</script>";

			return $cara;
		}

		public function changePwd($user, $pwlama, $pwbaru, $pwbaru1)
		{
			global $db;

			$cek = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM admins WHERE username = '$user' "));
			$pasw_lama = md5($pwlama);
			$pasw_baru = md5($pwbaru);
			$pasw_baru1 = md5($pwbaru1);

			if (empty($pwlama) || empty($pwbaru) || empty($pwbaru1)) {
				# code...
				echo "<script> alert('Data Yang Anda Isi Masih Belum Lengkap'); </script><br />";
				echo "<a href='javascript:history.go(-1)'><b><i> Coba Lagi </i></b> ";
			}
			else
			{
				if ($pasw_lama == $cek['password']) {
					# code...
					if ($pasw_baru == $pasw_baru1) {
						# code...
						mysqli_query($db, "UPDATE admins SET password = '$pasw_baru' ");
						echo "<script> alert('Update Password Success'); document.location.href='?min=home' </script> ";
					}
					else
					{
						echo "<script> alert('Password Baru Tidak Sama'); document.location.href='?min=changepasw' </script>";
					}
				}
				else
				{
				echo "<script> alert('Password Lama Salah'); document.location.href='?min=changepasw' ";
				}
			}
		}

		public function admLogin($username ,$password)
		{
			global $db;

			function antiinjection($data)
				{
					$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
				  	return $filter_sql;
				}

			$user = antiinjection($username);
			$pasw = antiinjection(md5($password));

			$admlog = mysqli_query($db, "SELECT * FROM users WHERE username = '$user' AND password = '$pasw' AND blokir = 'N' ");
			$nemu = mysqli_num_rows($admlog);
			$r = mysqli_fetch_array($admlog);

			if ($nemu > 0) {
				# code...
			session_start();

				  $_SESSION['namauser']	= $r['username'];
				  $_SESSION['namalengkap']	= $r['nama_lengkap'];
				  $_SESSION['passuser']	= $r['password'];
				  $_SESSION['leveluser']	= $r['level'];

				  echo "<script>alert('Selamat Datang Di Intive Studio'); window.location = 'mimin.php?min=home'</script>";
			}
			else
			{
				echo "<script>alert('Username Atau Password Anda Salah'); window.location = 'index.php'</script>";
			}
		}

		public function inpSlider($ns, $example, $ext)
		{
			global $db;

				# code...
				$lokasi_file = $_FILES['file']['tmp_name'];
				$name = $ns;
				$ukuran = $_FILES['file']['size'];

				$direktori = "../images/slider/$name.$ext";

				if ($ext == "png" || "jpg" || "jpeg") {
					# code...
					if ($ukuran > 500000) {
						# code...
						echo "<script>alert('File terlalu besar! maksimal 500 Kb');</script>";
					}else
					{
						$upload = move_uploaded_file($lokasi_file, $direktori);
						if ($upload) {
							# code...
			    				$inp = mysqli_query($db, "INSERT INTO slider(id_slider, gambar, nama_slider) VALUES('', '$name.$ext', '$ns') ");

			    				if ($inp) {
			    					# code...
			    					echo "<script>alert('Slider Berhasil Ditambahkan'); document.location.href='?min=opslider' </script>";
			    				}
			    				else
			    				{
			    					echo "<script>alert('Slider Gagal Ditambahkan'); document.location.href='?min=inpSlider' </script>";
			    				}
						}
					}
				}
				else
				{
					echo "<script>alert('File Harus Berformat PNG, JPG, JPEG'); </script>";
				}
			
		}

		public function hpsSlider($id)
		{
			global $db;

			$hps = mysqli_query($db, "DELETE FROM slider WHERE id_slider = '$id' ");

			echo "<script> alert('Data Berhasil Dihapus'); document.location.href='?min=opslider' </script>";
			
			return $hps;
		}

		public function inputYM($nama, $username)
		{
			global $db;

			$camfrog =  $db->query("INSERT INTO ym(id, nama, username) VALUES('', '$nama', '$username')");

			if ($camfrog) {
				# code...
				echo "<script>alert('CS Berhasil Ditambahkan'); document.location.href='?min=cs' </script>";
			}
			else {
				echo "<script>alert('CS Gagal Ditambahkan'); document.location.href='?min=cs' </script>";
			}

			return $camfrog;
		}

		public function hpsCS($id)
		{
			global $db;

			$hapus = $db->query("DELETE FROM ym WHERE id = '$id' ");

			if ($hapus) {
				# code...
				echo "<script>alert('Data Berhasil Dihapus'); </script>";
			}
			else
			{
				echo "<script>alert('Data Gagal Dihapus'); </script>";
			}

			return $hapus;
		}
		public function tambahBank($nabank, $norek, $user)
		{
			global $db;

			$whoami = $db->query("INSERT INTO bank(id_bank, nama_bank, no_rekening, pemilik) VALUES('', '$nabank', '$norek', '$user')");

			if ($whoami) {
				# code...
				echo "<script>alert('Bank Berhasil Ditambahkan'); document.location.href='?min=bank' </script>";
			}
			else {
				echo "<script>alert('Gagal Tambah Bank'); document.location.href='?min=bank' </script>";
			}

			return $whoami;
		}

		public function hapusBank($id)
		{
			global $db;

			$exec = $db->query( "DELETE FROM bank WHERE id_bank = '$id' ");

			if ($exec) {
				# code...
				echo "<script>alert('Bank Berhasil Dihapus'); document.location.href='?min=bank' </script>";
			}
			else {
				echo "<script>alert('Gagal Hapus Bank'); document.location.href='?min=bank' </script>";
			}
		}

		public function inputArtikel($judul, $tgl, $author, $konten, $gambar, $ext)
		{
			global $db;

			$lokasi_file = $_FILES['gambar']['tmp_name'];
			$name = $judul;
			$ukuran = $_FILES['gambar']['size'];

			$direktori = "../images/blog/$name.$ext";

			if ($ext == "png" || "jpg" || "jpeg") {
				# code...
				if ($ukuran > 500000) {
					# code...
					echo "<script> alert('File Terlalu Besar, Maksimal 500 Kb'); </script> ";
				}
				else
				{
					$upload = move_uploaded_file($lokasi_file, $direktori);
					if ($upload) {
						# code...
						$nuubz = $db->query("INSERT INTO artikel(id_artikel, judul, pembuat, deskripsi, gambar, tgl_posting, dibaca) 
						VALUES('', '$judul', '$author', '$konten', '$name.$ext', '$tgl', '') ");

						if ($nuubz) {
							# code...
							echo "<script>alert(' Artikel Berhasil Ditambahkan'); document.location.href='?min=inpberita' </script>";
						}
						else
						{
							echo "<script>alert('Artikel Gagal Ditambahkan'); document.location.href='?min=inpberita' </script>";
						}
					}
				}
			}
			else
			{
				echo "<script>alert('Gagal Tambah Gambar'); </script>";
			}
		}

		public function hapusArtikel($id)
		{
			global $db;

			$cok = $db->query( "DELETE FROM artikel WHERE id_artikel = '$id' ");

			if ($cok) {
				# code...
				echo "<script>alert('Hapus Berhasil'); </script>";
			}
			else
			{
				echo "<script>alert('Gagal Hapus'); </script>";
			}
		}

	}

?>