<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">UTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/UTS/CodeIgniter-3.1.9/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/UTS/CodeIgniter-3.1.9/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CRUD
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>index.php/beranda/menujucreate">Create</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Read</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/UTS/CodeIgniter-3.1.9/">Update and Delete</a>

        </div>
      </li>
    </ul>
    <span class="navbar-text">
      Created By Daffa Sulthon Kautsar
    </span>
  </div>
</nav><hr>
<h1 class="page-header text-center" align="center">
			Tambah Buku Baru
		</h1>
    <div><?= validation_errors() ?></div>
      <?= form_open_multipart('beranda/create',['class'=>'form-horizontal']) ?>
	<div class="container">
		<form class="form-group" method="POST" action="<?php echo base_url(); ?>index.php/beranda/create"
      >
			<table align="center" width="50%">
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="nama" class="form-control" placeholder="Isi Judul Buku "></td>
				</tr><td></td>
				<tr>
					<td>Deskripsi</td>
					<td><textarea placeholder="Tuliskan Deskripsi Buku .." name="deskripsi" class="form-control"></textarea></td>
					
				</tr>
        <tr>
          <td>Gambar Buku</td>
          <td><input type="file" name="userfile" class="form-control"></td>
        </tr>
    			</table>
			<button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-plus">Tambahkan</span>
      </button>
		</form>
	</div>
</body>
</html>