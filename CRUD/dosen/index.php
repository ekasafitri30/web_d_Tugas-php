<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<!-- <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar bg-info pl-5 pr-5">
				<a class="navbar-brand text-white">Data Dosen</a>
				<style>
					div {
						border: 1px solid #17a2b8;
					}
				</style>
				
			</nav>


<table class="table table-bordered  ">
	<thead>
		<tr>
			
			<th>NIM</th>
		    <th>Nama_Mahasiswa</th>
		    <th>Almat</th>
		    <th>Aksi</th>

		    
		</tr>
		
	</thead>
	<tbody>
		<?php 
		require '../Connection.php';
		$query = "SELECT * FROM dosen";
		$result = mysqli_query($conn, $query);
		while ($isi = mysqli_fetch_object($result)) {
			
		
		 ?>
		<tr>
		 	
		 	<td><?= $isi->nip; ?></td>
		 	<td><?= $isi->nama_dosen; ?></td>
		 	<td><?= $isi->alamat; ?></td>
		 	<td>
		 		<a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
		 		<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		 	</td>



	 </tr>
	<?php } ?>


	</tbody>
	</table>

</body>
</html>