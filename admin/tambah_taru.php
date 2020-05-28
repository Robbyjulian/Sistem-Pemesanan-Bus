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

	input[type=submit]{
		width: 30%;
		padding: 12px 20px;
		margin: 8px;

	}

	
</style>


<div id="layout">
	<div>
		<p>Form Tarif Dan Rute</p>
	</div>

	<form action="" method="POST">
		<table>

			<tr>
				<td>Rute</td>
			</tr>
				<tr>
					<td>
						<input type="text" name="rute" placeholder="RUTE" >
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

		$rute = @$_POST['rute'];
		$btn_simpan = @$_POST['submit'];

		if($btn_simpan) {
			if($rute == "" ) {
				?>
				<script type="text/javascript">
				alert("Data Tidak Boleh Kosong") ;
				</script>
				<?php
			} else{
				mysql_query("insert into tbl_taru values ('$id_taru','$rute')") or die(mysql_error());

				?>
				<script type="text/javascript">
					alert(" Data Tersimpan!");
					window.location.href="?page=taru&action=data";
				</script>
				<?php

			}
		}
		?>
