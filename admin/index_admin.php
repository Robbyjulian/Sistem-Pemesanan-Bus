<?php
include "../inc/koneksi.php";
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

#menu ul li.utama{
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


.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}

.utama:hover ul{
	display: block;
}

.utama ul li{
	display: block;
	background-color: #abc;
	width: 170px;
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
		<center><img src="../img/abm.png"></center>	
		</div>

		<div id="menu">
			<ul>
				<li class="utama" ><a href="?page=boking&action=data">PEMESANAN</a></li>
				<li class="utama" ><a href="?page=taru&action=data">RUTE</a></li>
				<li class="utama"><a href="">LAPORAN</a>
					<ul>
						<li><a href="">LAPORAN PERBULAN</a></li>
						<li><a href="">LAPORAN PERTAHUN</a></li>
					</ul>
				</li>
				<li style="float: right;"><a href="../logout.php">LOGOUT</a></li>
		</div>

		<div id="isi">
		<?php
		$page 	= @$_GET['page'];
		$action = @$_GET['action'];
				
				if ($page == 'boking') {
					if($action == 'data') {include "../admin/pesanan.php";}
				}elseif($page == 'taru') {
					if($action == 'data') {include "../admin/taru.php";}
					elseif ($action =='tambah') {include "../admin/tambah_taru.php";}	
				}

		?>
		</div>

		<div id="footer">
	<strong>@Copyright PT ARMADA BUMI MINANG</strong>
		</div>

	</div>
</body>
</html>