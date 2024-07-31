<?php
include('koneksi.php');
$input = new koneksi();
$input->inputData();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Table bootstrap</title>
	<link href="assets/bootstrap-5.3.3/dist/css/bootstrap.min.css" 
	rel="stylesheet">
</head>

<body>
	
	<h1>Table User Management</h1>
	<div class="table-container">
		<table border="1">
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
				foreach ($data_user as $row) {
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