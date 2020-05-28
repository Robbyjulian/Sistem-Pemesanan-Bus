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
			<th>ID.Transaksi</th>
			<th>ID.Operator</th>
			<th>NO.KTP</th>
			<th>Tanggal Transaksi</th>
			<th>Rute</th>
			<th>Type Bus</th>
			<th>Harga</th>
			<th>Tanggal Keberangkatan</th>
			<th>Lama Sewa</th>
			<th>Total Pembayarah</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
			$nomor=1;
			$sql=mysql_query("select tbl_operator.id_op, nama_op, tbl_pelanggan.no_ktp, nm_lengkap, transaksi.id_transaksi, tgl_transaksi, detail_transaksi.tgl_berangkat, type_bus, lama, harga, Total_bayar, tbl_taru.id_taru, rute from tbl_operator, tbl_pelanggan, transaksi, detail_transaksi, tbl_taru WHERE transaksi.id_op=tbl_operator.id_op AND transaksi.no_ktp=tbl_pelanggan.no_ktp AND transaksi.id_transaksi=detail_transaksi.id_transaksi order by transaksi.id_transaksi asc") or die (mysql_error());

			while ($data=mysql_fetch_array($sql)) {
				# code...
			}{

		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_transaksi']; ?></td>
			<td><?php echo $data['id_op']; ?></td>
			<td><?php echo $data['no_ktp']; ?></td>
			<td><?php echo $data['tgl_transaksi']; ?></td>
			<td><?php echo $data['id_taru']; ?></td>
			<td><?php echo $data['type_bus']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['tgl_berangkat']; ?></td>
			<td><?php echo $data['lama']; ?></td>
			<td><?php echo $data['tot_byr']; ?></td>
		

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