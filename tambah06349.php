<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="container">
		<h2>TAMBAH DATA MAHASISWA</h2>	
		<form method="post" action="simpantambah06349.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">NIM :</label>
				<input class="form-control" type="text" name="nim" id="nim" required>
			</div>
			<div class="form-group">
				<label for="nama">NAMA MAHASISWA :</label>
				<input class="form-control" type="text" name="nama" id="nama">
			</div>
            <div class="form-group">
				<label for="email">EMAIL :</label>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="foto">FOTO MAHASISWA :</label> 
				<input class="form-control" type="file" name="foto" id="foto">
			</div>
			<div>		
				<button class="btn btn-primary" type="submit">Simpan</button>
			</div>
		</form>
	</div>	
</body>
</html>