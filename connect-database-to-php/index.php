<?php 

require "functions.php";
$books = query("SELECT * FROM book");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.container {
			width: 600px;
			margin: 10px auto;
			text-align: center;
		}
		table {
			margin: 10px auto;
		}
		
	</style>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Database Perpustakaan</h1>
		<table border="1" cellpadding="4" cellspacing="0">
			
			<tr>
				<th>Id</th>
				<th>Aksi</th>
				<th>Pencipta</th>
				<th>Judul</th>
				<th>Harga</th>
				<th>Terbit</th>
			</tr>
		<?php $i = 1; ?>
		<?php foreach($books as $book) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="">Ubah</a>
					<a href="">Hapus</a>
				</td>
				<td><?= $book["pencipta"]; ?></td>
				<td><?= $book["judul"]; ?></td>
				<td><?= $book["harga"]; ?></td>
				<td><?= $book["terbit"]; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach ?>
		</table>
	
	</div>
</body>
</html>