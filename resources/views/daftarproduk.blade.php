<!DOCTYPE html>
<html lang="en">
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
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b><a href="/">Data Produk</a></b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/tambahproduk" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Tambah Produk</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				
				<thead>
					<tr>
						<th>No</th>
					<th>Nama Produk</th>
						<th>harga</th>
						<th>kategori</th>
						<th>status</a> <br>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    <?php $no = 1
					?>
                    @foreach ($produks as $produk) 
					<?php 
					$status = str_replace(' ', '', $produk->status);
					?>
					<tr>
						<td>{{ $no }}</span></td>
						<td>{{ $produk->nama_produk }}</td>
						<td>{{ $produk->harga }}</td>
						<td>{{ $produk->kategori }}</td>
						<td><a href="/{{ $status }}">{{ $produk->status }}</a></td>
						<td>
							<a href="/editproduk/{{ $produk->id_produk }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="/hapusproduk/{{ $produk->id_produk }}" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    <?php $no++ ?>
                    @endforeach
				</tbody>
			</table>
			
		</div>
	</div>        
</div>
</body>
</html>