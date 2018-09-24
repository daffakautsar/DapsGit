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
          <a class="dropdown-item" href="<?php echo base_url();?>index.php/beranda/menujuread">Read</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/UTS/CodeIgniter-3.1.9/">Update and Delete</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="http://localhost/UTS/CodeIgniter-3.1.9/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SignUp or Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/beranda/gologin">Login</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/beranda/logout">Logout</a>
        </div>
      </li>
    </ul>
    <span class="navbar-text">
     Hi, Sobat <?php echo $this->session->userdata("nama"); ?> !
    </span>
  </div>
</nav><hr>
	<div class="container">
		<h1 class="page-header text-center" align="center">
			Pendidikan Indonesia
		</h1>
		<table class="table table-striped" border="1" align="center">
			<tr>
			<thead class="thead-dark" align="center">
				<th>Id</th>
        <th>Thumbnail</th>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th rowspan="2">Action</th>
			</thead>
			</tr>
			<?php
			foreach ($buku as $buku) {
			?>
			<tr>
				<td><?php echo $buku->id; ?></td>
        <td><?php $thumbnail = [  'src'   =>'uploads/' . $buku->gambar,
                              'height'=>'50'
                        ];
          echo img($thumbnail)
          ?></td>
				<td><?php echo $buku->nama; ?></td>
				<td><?php echo $buku->deskripsi; ?></td>
				<td align="center"><a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/beranda/edit/<?php echo $buku->id; ?>" role="button"><span class="glyphicon glyphicon-pencil">Edit</span></a>
					<span>||</span>
					<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/beranda/delete/<?php echo $buku->id; ?>" role="button"><span class="glyphicon glyphicon-trash">Delete</span></a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>

<br><br><br><br><hr>

	<!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-5"></div>
            <div class="row vertical-gap">
                <div class="col-lg-5">
                    <!-- START: Info -->
                    <h2 class="display-4">Contact Info:</h2>
                    <div class="nk-gap mnt-3"></div>

                    <p>I Present My UTS, UTS is a program that i create for CRUD function with bootstrap.</p>

                    <ul class="nk-contact-info">
                        <li>
                            <strong>Address:</strong> SMK Madinatul Quran, Jonggol</li>
                        <li>
                            <strong>Email:</strong> empak51daffa@gmail.com</li>
                        <li>
                            <strong>Github:</strong> daffa kautsar</li>
                    </ul>
                    <!-- END: Info -->
                </div>
                <div class="col-lg-7">
                    <!-- START: Form -->
                    <form action="#" class="nk-form nk-form-ajax">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control required" name="email" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="title" placeholder="Your Title">

                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn">Send Message</button>
                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-5"></div>
        </div>
        <!-- END: Contact Info -->
</body>
</html>