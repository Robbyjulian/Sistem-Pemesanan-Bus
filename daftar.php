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
		HALAMAN REGISTRASI
	</div>

	<div id="input">
		<form action="" method="POST">
			<table>
				
				<tr>
					<td>
					<label for="nama_lengkap">Nama Lengkap</label>
					</td>
					<td>
						<input type="text" id="nama_lengkap" name="nama_lengkap" />
					</td>
				</tr>

				<tr>
					<td>
					<label for="username">Username</label>
					</td>
					<td>
						<input type="text" id="username" name="username" />
					</td>
				</tr>

				<tr>
					<td>
					<label for="password">Password</label>
					</td>
					<td>
						<input type="password" id="password" name="password" />
					</td>
				</tr>

				<tr>
					<td>
					<label for="jk">Jenis Kelamin</label>
					</td>
					<td>
						<select id="jk" name="jk">
							<option value="laki-laki">Laki-laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="register" value="Register" />
					</td>
				</tr>
			</table>
		</form>

	<?php 
	include "inc/koneksi.php";
	if (@$_POST["register"]) {
		$nama_lengkap = @$_POST["nama_lengkap"];
		$username     = @$_POST["username"];
		$password     = @$_POST["password"];
		$jk           = @$_POST["jk"];

			if ($nama_lengkap == "" || $username == "" || $password == "" || $jk == "") {
				?> 
				<script type="text/javascript">
					alert("Mohon untuk melengkapi data, Terima Kasih.");
				</script>
				<?php 
			} else {
				$sql = mysql_query("insert into tbl_login values ('','$username',md5('$password'),'$nama_lengkap','$jk','pelanggan')") or die(mysql_error());

				if ($sql) {
					?> 
					<script type="text/javascript">
						alert("Pendaftaran Berhasil, Silahkan Login");	
						window.location.href="?page=pesan";
					</script>
					<?php 
				}


			}

		}
	?>



	</div>
</div>
</body>
</html>