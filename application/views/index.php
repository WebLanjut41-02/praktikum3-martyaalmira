<!DOCTYPE html>
<html>
<head>
	<title>Warung KITA</title>
</head>
<body>
	<h2>Warung K I T A</h2>
	<h4>Pesan Makananmu</h4>
	<form action="<?php echo base_url('pesan/inputpemesan')?>"  method="post">

		<table>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>

	</form>

</body>
</html>
