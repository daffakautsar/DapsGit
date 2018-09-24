<!DOCTYPE html>
<html>
<head>
	<title>Pendidikan Indonesia</title>
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
<h1 align="center">Pendidikan Indonesia</h1>
<div class="row">
	<?php foreach ($buku as $buku) {
    ?>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?=img([
          'src'=>'uploads/' . $buku->gambar,
          'style'=>'max-width: 200%; max-height:200%; height:200px'
        ])?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $buku->nama ?></h5>
    <p class="card-text"><?= $buku->deskripsi ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
	<?php } ?>
</div>
</body>
</html>