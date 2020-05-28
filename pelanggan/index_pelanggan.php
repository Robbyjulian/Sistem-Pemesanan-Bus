<?php
include "../inc/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PT ARMADA BUMI MINANG</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/mysqript.js"></script>
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
		<center><img src="../img/abm.png"></center>	
		</div>

		<div id="menu">
			<ul>
				<li><a href="?page=dd&action=data">INPUT DATA DIRI</a></li>
				<li><a href="?page=boking&action=data">BOKING BUS</a></li>
				<li><a href="?page=bp&action=data">BUKTI PENYEWAAN</a></li>

				<li style="float: right;"><a href="../logout.php">LOGOUT</a></li>
		</div>

		<div id="isi">
		<?php
		$page 	= @$_GET['page'];
		$action = @$_GET['action'];

				if ($page == 'dd') {
					if($action == 'data') {include "../pelanggan/dd.php";}
				}elseif ($page == 'boking') {
					if($action == 'data') {include "../pelanggan/pemesanan.php";}
				}elseif($page == 'bp') {
					if($action == 'data') {include "../pelanggan/bp.php";}
				}

		?>
		</div>

		<div id="footer">
	<strong>@Copyright PT ARMADA BUMI MINANG</strong>
		</div>

	</div>
</body>
</html>