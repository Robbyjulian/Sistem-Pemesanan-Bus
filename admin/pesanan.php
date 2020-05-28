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
	<div id="tampilan-nama">Tampilan Bukti Pembayaran</div>
		
	<div id="tampilan">
		<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>No.KTP</th>
			<th>Nama Lengkap</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Paket Perjalanan</th>
			<th>Harga</th>
			<th>Tanggal Keberangkatan</th>
			<th>Lama Sewa</th>
			<th>Total Pembayarah</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
			$nomor=1;
			$tampil_pemesanan=mysql_query("SELECT* from tbl_pemesanan order by no_ktp desc")or die (mysql_error());
			while($tampil_psn=mysql_fetch_array($tampil_pemesanan)){

		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $tampil_psn['no_ktp']; ?></td>
			<td><?php echo $tampil_psn['nm_lengkap']; ?></td>
			<td><?php echo $tampil_psn['tempat_lhr']; ?></td>
			<td><?php echo $tampil_psn['tgl_lhr']; ?></td>
			<td><?php echo $tampil_psn['alamat']; ?></td>
			<td><?php echo $tampil_psn['rute']; ?></td>
			<td><?php echo $tampil_psn['tarif']; ?></td>
			<td><?php echo $tampil_psn['tgl_ber']; ?></td>
			<td><?php echo $tampil_psn['lama_sewa']; ?></td>
			<td><?php echo $tampil_psn['tot_byr']; ?></td>
		

			<td>
				<div id="tombol">
					<a onclick="return confirm('Apakah Yakin Ingin Di Hapus')" href=""><button>Cetak Bukti</button></a>
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