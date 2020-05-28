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

		input[name=t_lhr], input[name=no_hp], input[name=pekerjaan] {
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
	    width: 420px;
	    padding: 16px 20px;
	    border: none;
	    border-radius: 4px;
	    background-color: #f1f1f1;
	}

	input[name="tarif"], input[name="lama_sewa"] {
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
		<p>Form Data Diri</p>
	</div>

	<form action="" method="POST">
		<table>

			<tr>
				<td>No. KTP</td>
				<td>Nama Lengkap</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="no_ktp" placeholder="No. KTP" >
				</td>

				<td>
					<input type="text" name="nm_lengkap" placeholder="Nama Lengkap" >
				</td>
			</tr>


			<tr>
				<td>
					<table>
					<tr>
						<td>Tempat Lahir</td>
						<td>Tanggal Lahir</td>
					</tr>

						<tr>
							<td>
								<input type="text" name="t_lhr" />
							</td>

							<td>
								<input type="date" name="tgl_lhr" />
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
								<textarea id="alamat" name="alamat" rows=1 cols="35" ></textarea>
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
							<td>Nohp</td>
							<td>Pekerjaan</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="no_hp">
							</td>
							<td>
								<input type="text" name="pekerjaan">
							</td>
						</tr>
					</table>

				</td>
				<td>
					<table>
						<tr>
							<td>Agama</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<select name="agama">
									<option value="">Silahkan pilih</option>
									<option value="Islam">Islam</option>
									<option value="Budha">Budha</option>
									<option value="Katolik">Katolik</option>
									<option value="Kristen">kristen</option>
								</select>
							</td>
						</tr>
					</table>
				</td>

			</tr>
		
			<tr>
				<td> 
					<input type="submit" name="submit" value="Save">
				</td>
			</tr>

		</table>
	</form>
</div>

<?php
	
	$no_ktp = @$_POST['no_ktp'];
	$nm_lengkap = @$_POST['nm_lengkap'];
	$t_lhr = @$_POST['t_lhr'];
	$tgl_lhr = @$_POST['tgl_lhr'];
	$alamat = @$_POST['alamat'];
	$no_hp = @$_POST['no_hp'];
	$pekerjaan = @$_POST['pekerjaan'];
	$agama = @$_POST['agama'];
	$btn_spn =@$_POST['submit'];

	if($btn_spn) {
		if($no_ktp == "" || $nm_lengkap == "" || $t_lhr == "" || $tgl_lhr == "" || $alamat == "" || $no_hp == "" || $pekerjaan == "" || $agama == "" )
	{
?>
	<script type="text/javascript">
		alert("Data Tidak Boleh Kosong.!");
	</script>
	<?php
}else {
	mysql_query("insert into tbl_pelanggan value ('$no_ktp','$nm_lengkap','$t_lhr','$tgl_lhr','$alamat','$no_hp','$pekerjaan','$agama')") or die (mysql_error());
	?>
	<script type="text/javascript">
		alert("Data Tersimpan.!")
		window.location.href="?page=boking&action=data";
	</script>
	<?php
		}
	}
	?>
