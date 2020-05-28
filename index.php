<?php
@session_start();
include "inc/koneksi.php";

if (@$_SESSION["admin"]) {
	header("location: admin/index-admin.php");

} else if (@$_SESSION["pelanggan"]) {
	header("location: pelanggan/index_pelanggan.php");

} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title>PT ARMADA BUMI MINANG</title>
	<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
}

#canvas{
	width: 1100px;
	margin: 0 auto;
	border: 1px solid silver;
}

#header{
	font-size: 20px;
	padding: 0px;
	margin: -5px;
	text-align: center;
}

#menu{
	background-color: #1e90ff;
}

#menu ul{
	list-style: none;
	margin: 0;
	padding: 0;
}

#menu ul li{
	display: inline-table;
}

#menu ul li:hover{
	background-color: #c0c0c0;
}

#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}

#isi{
	min-height: 400px;
	padding: 20px;
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #1e90ff;
}

 </style>
</head>
<body>

	<div id="canvas">

		<div id="header">
		<center><img src="img/abm.png"></center>	
		</div>

		<div id="menu">
			<ul>
				<li><a href="/PT">HOME</a></li>
				<li><a href="?page=pesan">PESANAN SEKARANG</a></li>
				<li><a href="?page=gallery">GALLERY</a></li>
				<li><a href="?page=tentang">TENTANG KAMI</a></li>
			</ul>
		</div>

		<div id="isi">
		<?php
		$page = @$_GET['page'];
				
				if ($page == 'jenis') {
					include "inc/jenis.php";
				} else if ($page == 'pesan') {
					include "login.php";
				} else if ($page == 'gallery') {
					include "inc/gallery.php";
				} else if ($page == 'tentang') {
					include "inc/tentang.php";
				} else if ($page=='registrasi') {
					include "daftar.php";
				}

		?>
		</div>

		<div id="footer">
	<strong>@Copyright PT ARMADA BUMI MINANG</strong>
		</div>

	</div>
</body>
</html>

<?php 
}
?>