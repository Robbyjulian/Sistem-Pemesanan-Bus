<!DOCTYPE html>
<html>
<head>
	<title>Input Tarif Dan Rute</title>
	<style type="text/css">
body{
	font-size: 14px;
	font-family: arial;
}
#tampilan{
	border:1px solid #C4C4C4;
	width:100%;
}
#tabel-tampil tr:nth-child(odd){
	background-color:#fff;
}
#tabel-tampil tr th{
	background-color:#acbdef;
	color:#FFFFFF;
	padding:4px;
	text-align:left;
}
#tabel-tampil td{
	padding:4px;
}
#tampilan-nama{
	margin-top:0px;
	margin-bottom:6px;
	margin-left:0px;
	border:2px solid #C4C4C4;
	padding:5px;
	width:99%;
}

#tabel-tampil{
	border:2px solid silver;
	width:100%;
	background-color: #ccc;
}
#label-tampil-no{
	width:10px;
}
#label-opsi{
	width:158px;
	font-weight:bold;
}

#tombol {
	margin-top: 10px;
	margin-bottom: 10px;
}


#tombol-tambah-container{
	margin-bottom:10px;
}
#tombol-tambah-container a:hover{
	background-color:#C4C4C4;
}
.tombol-opsi-container {
	float:left;
}

	</style>
</head>
<body>
	<div id="tampilan-nama">Tampilan Tarif Dan Rute</div>
		
	<div id="tombol">
		<a href="?page=taru&action=tambah"><button>Tambah Data</button></a>
	</div>
	
	<div id="tampilan">
		<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>Rute</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
			$nomor=1;
			$tampil_taru=mysql_query("SELECT* from tbl_taru order by id_taru desc")or die (mysql_error());
			while($tampil_tr=mysql_fetch_array($tampil_taru)){

		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $tampil_tr['rute']; ?></td>
		

			<td>
				<div id="tombol">
					<a onclick="return confirm('Apakah Yakin Ingin Di Hapus')" href=""><button>Hapus</button></a>
				</div>
			</td>
		</tr>
		<?php

	}
	?>

</table>
</div>
</body>
</html>