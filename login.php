<?php
@session_start();
include "inc/koneksi.php";

if (@$_SESSION["admin"]) {
	header("location: admin/index_admin.php");
} else if (@$_SESSION["pelanggan"]) {
	header("location: pelanggan/index_pelanggan.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background-color: #fff;
}

#utama{
	width: 300px;
	margin: 0 auto;
	margin-top: 60px;
}

#judul{
	padding: 15px;
	text-align: center;
	color: #fff;
	font-size: 20px;
	background-color: #1e90ff;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom:3px solid #098765;
}

#input{
	background-color: #c0c0c0;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

input{
	padding: 6px;
	margin: 4px;
	border: 0;

}

.mdl{
	width: 240px;
}

.btn{
	background-color: #fff;
	border-radius: 10px;
	color: #c0c;
	margin-top: 10px;
}

.btn:hover{
	background-color: #f0ffff;
	cursor: pointer;
}

.dt{	
	margin-top:13px;
	color: #111;
	float: right;
	text-decoration: none;

}

.dt:hover{
	cursor: pointer;
	color: #222;

}


	</style>
</head>
<body>

<div id="utama">
	<div id="judul">
		HALAMAN LOGIN
	</div>

	<div id="input">
		<form action="" method="post">
			<div>
				<input type="text" name="user" placeholder="Nama Pengguna" class="mdl" />
			</div>
			<div>
				<input type="password" name="pass" placeholder="Kata Sandi" class="mdl" />
			</div>
			<div style="margin-top:6px; width: 150px; margin-left: 5px; ">
					<tr>
						<select name="level" class="combobox" >
						<option value="">-- Login Sebagai --</option>
						<option value="admin">Admin</option>
						<option value="pelanggan">Pelanggan</option>			
						</select>
						</td>
					</tr>
					</div>
			<div>
				<input type="submit" name="login" value="Login" 	class="btn" />
				<span>
					<a href="?page=registrasi" class="dt"><b>Registrasi</b></a>
				</span>
			</div>
			
		</form>

		<?php
			$user 	= @$_POST['user'];
			$pass 	= @$_POST['pass'];
			$level 	= @$_POST['level'];
			$login 	= @$_POST['login'];
			
		if($login) {
			if($user == "" || $pass == "") {
				?> <script type="text/javascript">alert(" Username / Password Tidak Boleh Kosong !")</script> <?php
			} else {
				$sql = mysql_query("select * from tbl_login where username = '$user' and password=md5('$pass') and level=('$level') ;") or die ( mysql_error());
				$data = mysql_fetch_array($sql);
				$cek = mysql_num_rows($sql);
				if($cek >=1 ){
					if($data['level'] == "admin"){
						@$_SESSION['admin'] = $data ['id_login'];
						header("location: admin/index_admin.php");
					} else if ($data['level'] == "pelanggan"){
				    		@$_SESSION['pelanggan'] = $data ['id_login'];
						header("location: pelanggan/index_pelanggan.php");
					}
					
				} else {
					?>

					<script type="text/javascript">
						alert("MAAF DATA YANG ANDA MASUKKAN TIDAK SESUSAI.MOHON DICOBA KEMBALI..!");
					</script>

					<?php
				}
		
			}
		}

		?>


	</div>
</div>
<div>
<br>
<br>
<form action="" method="post">
<center><strong>JIKA ANDA BELUM MEMPUNYAI AKUN SILAHKAN DAFTAR TERLEBIH DAHULU KLIK REGISTRASI <br>
	SEBELUM MELAKUKAN LOGIN AGAR BISA MELAKUKAN PEMESANAN BUS.!</strong></center>
</form>
</div>
</body>
</html>