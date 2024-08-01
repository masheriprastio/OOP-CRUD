<?php
include('koneksi.php');
$db = new koneksi();
$data_user = $db->tampilData();

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $id = $_POST['id'];
        $db->deleteData($id);
        header("Location: index.php");
        exit();
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Username:" . htmlspecialchars($username) . "<br>";
        echo "Password:" . htmlspecialchars($password) . "<br>";

        // Input data ke database
        $db->inputData($username, $password);

        // Redirect untuk menghindari pengiriman ulang data
        header("Location: index.php");
        exit();
    }
} else {
    // header("Location: index.php");
}
?>
<!DOCTYPE html>
<h>

	<head>
		<title>Table bootstrap</title>
		<link href="assets/bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-5">Table User Management</h1>
				<!-- Button to Open the Modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
					Tambah User
				</button>

			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">Action</th>
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
						<td>
							<!-- Tombol Edit -->
							<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?php echo $row['id']; ?>" data-username="<?php echo $row['username']; ?>" data-password="<?php echo $row['password']; ?>">
								Edit
							</button>
							<!-- Tombol Delete -->
							<form method="POST" action="" style="display:inline;">
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit" class="btn btn-danger">Delete</button>

							</form>

						</td>
					</tr>
					</thead>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">Tambah User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="">
						<div class="mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" name="username" required>
						</div>
						<div class="mb-3">
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>
	<script src="assets/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	</body>

	</html>