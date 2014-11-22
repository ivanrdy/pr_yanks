<?php
	include("../lib/conn.php");
	include("../lib/noinjek.php");
	session_start();
	//Index Controller
	switch($_GET['process']){
		case "login":
			$u = noinjek($_POST['u']);
			$p = noinjek($_POST['p']);

			if(!ctype_alnum($u) OR !ctype_alnum($p)){
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				        window.alert('Injeksi terdeteksi.')
				        window.location.href='in'
				        </SCRIPT>");
			}else{
				$check = mysql_query("SELECT * FROM user WHERE username='$u' AND password='$p'");
				$count = mysql_num_rows($check);
				if($count == 1){
					
					$_SESSION['name'] = $u;
					$_SESSION['auth'] = "Superuser";
					echo ("<SCRIPT LANGUAGE='JavaScript'>
				        	window.alert('Selamat datang, $u.')
				        	window.location.href='mint'
				        	</SCRIPT>");
				}else{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
				        	window.alert('Username / Password salah.')
				        	window.location.href='in'
				        	</SCRIPT>");
				}
			}

			break;

		case "logout":

			$_SESSION['name'] = "";
			$_SESSION['auth'] = "";

			session_destroy();

			header("location:beranda");

			break;

		case "addtesti":

			$nama = $_POST['nama'];
			$isi  = $_POST['isi'];
			$url  = $_POST['url'];
			$date = date('Y-m-d');
			$asal = $_POST['asal'];
			$status = 'Nonaktif';


			$query = mysql_query("INSERT INTO testimoni(id,pengirim,url,asal,tanggal,status,isi)
								VALUES ('','$nama','$url','$asal','$date','$status','$isi')");

			if($query){ 
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Testimoni berhasil ditambahkan, menunggu moderasi dari Admin. Terimakasih.')
						window.location.href='$_SERVER[HTTP_REFERER]'
						</SCRIPT>");
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Terjadi kesalahan pada penambahan testimoni, silakan ulangi.')
						window.location.href='$_SERVER[HTTP_REFERER]'
						</SCRIPT>");
			}

			break;
	}
?>