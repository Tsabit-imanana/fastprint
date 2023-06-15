<!DOCTYPE html>
<html lang="en">
<head>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Fastprint</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://127.0.0.1:8000/styles.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		
		</head>
</head>
<body>
    <div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="POST">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Tambah produk</h4>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama Produk</label>
						<input name="nama_produk" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input name="harga" type="number" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input name="kategori" type="text" class="form-control" required >
					</div>
					<div class="form-group">
						<label  for="cars">Status :</label> <br>
							<select name="status" id="cars">
							<option value="Bisa dijual">Bisa dijual</option>
							<option value="Tidak Bisa dijual">Tidak Bisa dijual</option>
							</select>
					</div>					
				</div>
				<div class="modal-footer">
					<a href="/">Kembali?</a>
					<input type="submit" class="btn btn-success" value="Edit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>