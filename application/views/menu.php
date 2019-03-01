<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Deskripsi</th>
			<th scope="col">Harga</th>
		</tr>
	</thead>

	<tbody>
		<?php
		$datamenu = $this->session->all_data;
		$i = 1;
		foreach ($datamenu as $data){ ?>
		<tr>
			<th scope="row"><?php  echo $i++ ?></th>
			<th><?php echo $data->nama_makan; ?></th>
			<th><?php echo $data->desc; ?></th>
			<th><?php echo $data->harga; ?></th>
			<button type="button" class="btn btn-info">Pesan</button>
		</tr>
		<?php } ?>
	</tbody>
</table>

</body>
</html>