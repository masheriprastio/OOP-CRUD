<?php
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Table bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		/* Add this style rule to center-align table content */
		.table td,
		.table th {
			text-align: center;
		}
	</style>
</head>

<body>
	
	<h1>Table User Management</h1>
	<div class="table-container">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data_barang as $row) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
					</tr>
					</thead>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>