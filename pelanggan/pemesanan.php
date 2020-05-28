<style type="text/css">
	
	#layout {
		width: 900px;
		border : 0px solid black;
		margin : 0 auto;
	}

	input {margin: 5px;}

	input[type=text]{
		width: 420px;
		padding: 12px 20px;
		margin: 8px;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
   		transition: 0.7s; 
	}

		input[name=nm_lengkap],[name=no_hp], input[name=id_op] {
			width: 195px !important;
		}

	input[type=date]{
		width: 200px;
		padding: 12px 20px;
		margin: 8px;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
   		transition: 0.7s; 
	}

	input[type=submit]{
		width: 30%;
		padding: 12px 20px;
		margin: 8px;

	}

	textarea{
		margin: 5px;
		width: 420px;
		padding: 12px 20px;
		margin: 8px;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	select {
		margin: 5px;
	    width: 200px;
	    padding: 16px 20px;
	    border: none;
	    border-radius: 4px;
	    background-color: #f1f1f1;
	}

	input[name="harga"], input[name="lama_sewa"] {
		width: 200px;
	}


	/*koding css untuk nyisipkan icon ke tag input*/
	.posisi-icon {
		position: relative;
	}

	.posisi-icon .fa {
		position: absolute;
		padding: 23px;
		left: 15px;
		right: 15px;
		pointer-events: none;
	}

	
</style>


<div id="layout">
	<div>
		<p>Form Pemesanan</p>
	</div>

	<?php
	$carikode = mysql_query("Select max(id_transaksi) from transaksi") or die(mysql_error());
	$datakode = mysql_fetch_array($carikode);
	if($datakode){
		$nilaikode = substr($datakode[0], 1);
		$kode = (int) $nilaikode;
		$kode = $kode + 1;
		$hasikode = "B".str_pad($kode,3,"0",STR_PAD_LEFT);
	}else {
		$hasikode = "B001";
	}

	?>

	<form action="" method="POST">
		<table>
			<tr>
				<td>Operator</td>
			</tr>

			<?php 
			$sql = mysql_query("select * from tbl_operator where id_op = 11 ") or die(mysql_error());
			$data = mysql_fetch_array($sql);
			?>

			<tr>
				<td>
					<input type="text" name="id_op" value="<?php echo $data['id_op']; ?>" required readonly >
				</td>
			</tr>
			<tr>
				<td>ID.Transaksi</td>
				<td>No.KTP</td>
			</tr>
				<tr>
					<td>
						<input type="text" name="id_transaksi" value="<?php echo $hasikode; ?>" placeholder="ID.Transaksi" readonly > 
					</td>

					<td>
						<input type="text" name="no_ktp" value="">
					</td>
				</tr>


				<tr>
					<td>
						<table>
						<tr>
							<td>Nama Lengkap</td>
							<td>No.HP</td>
						</tr>

							<tr>
								<td>
									<input type="text" name="nm_lengkap" disabled />
								</td>

								<td>
									<input type="text" name="no_hp" / disabled>
								</td>
							</tr>
						</table>
					</td>

					<td>
						<table>
						<tr>
							<td>Alamat</td>
							<td></td>
						</tr>

							<tr>
								<td>
									<textarea id="alamat" name="alamat" rows=1 cols="35" disabled ></textarea>
								</td>

								<td></td>
							</tr>
						</table>
					</td>
				</tr>

			
			<tr>
				<td>
					<table>
						<tr>
							<td>Tanggal Transaksi</td>
							<td>Paket Perjalanan</td>
						</tr>

						<tr>
							<td>
								<input type="date" id="tgl_transaksi" name="tgl_transaksi" required>
							</td>
							<td>

								<select id="paket_per" name="id_taru" required>
									<option value="">Silahkan Pilih Paket</option>
									<?php 
									$sql = mysql_query("select * from tbl_taru") or die(mysql_error());
									while ($data = mysql_fetch_array($sql)) {
									
									?>
									<option value="<?php echo $data["id_taru"]; ?>"><?php echo $data["rute"]; ?></option>
									<?php
									}
									?>
								</select>

							</td>

						</tr>
					</table>
				</td>

				<td>
					<table>
						<tr>
							<td>Type Bus</td>
							<td>Harga</td>
						</tr>

						<tr>

							<td>
								
								<select id="type_bus" name="type_bus" required>
									<option value="">Select</option>
									<option value="1">26</option>
									<option value="2">35</option>
								</select>	
							</td>
							<td>
								<input type="text" id="harga" name="harga" readonly required>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			

			<tr>
				<td>
					<table>
					 	<tr>
					 		<td>Tanggal Keberangkatan</td>
					 		<td>Lama Sewa</td>

					 	</tr>

						<tr>
							<td>
								<input type="date" name="tgl_berangkat" required>	
							</td>
							<td>
									<input id="lama" type="text" name="lama_sewa" required>
							</td>
						</tr>
					</table>
				</td>
					<td>
						<table>
							<tr>
								<td>Total Bayar</td>
							</tr>
							<tr>
								<td>
									<input id="total" type="text" name="total" readonly required>
								</td>
							</tr>
						</table>
					</td>
			</tr>

			<tr>
				<td> 
					<input type="submit" name="submit" value="Save">
				</td>

				<td>
					<table>
						
					</table>
				</td>
			</tr>
		
		</table>
	</form>
</div>

	<?php


		if(@$_POST['submit']) {
			$id_transaksi = @$_POST['id_transaksi']; //transaksi
			$id_op = @$_POST['id_op']; //transaksi
			$no_ktp = @$_POST['no_ktp']; //transaski
			$id_taru = @$_POST['id_taru'];
			$type_bus = @$_POST['type_bus'];
			$harga = @$_POST['harga'];
			$tgl_transaksi = @$_POST['tgl_transaksi']; //transaksi
			$tgl_berangkat = @$_POST['tgl_berangkat']; 
			$lama_sewa = @$_POST['lama_sewa']; 
			$total = @$_POST['total'];	
			
				mysql_query("insert into transaksi values('$id_transaksi','$id_op','$no_ktp','$tgl_transaksi')") or die(mysql_error());
				
			

			      mysql_query("insert into detail_transaksi values ('$id_transaksi','$id_taru','$tgl_berangkat','$type_bus','$lama_sewa','$harga','$total')") or die(mysql_error());

	?>

				<script type="text/javascript">
					alert(" Data Tersimpan!");
					window.location.href="";
				</script>

		<?php	
		}
		?>
