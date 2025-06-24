<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sign Up Pinjam Yuk!</title>
	<link href="<?php echo base_url('asset_login/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('asset_login/css/login.css'); ?>" rel="stylesheet">
</head>
<body>
	<form class="form-signin" method="post" action="<?php echo site_url('Login/daftar_aksi'); ?>">
		<div class="text-center mb-4">
			<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm4-6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
				<path fill-rule="evenodd" d="M13.5 5.5a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5z"/>
			</svg>
			<h1 class="h3 mb-3 font-weight-normal text-white">Sign Up Pinjam Yuk!</h1>
		</div>

		<div class="form-label-group">
			<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
			<label for="username">Username</label>
		</div>

		<div class="form-label-group">
			<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
			<label for="email">Email</label>
		</div>

		<div class="form-label-group">
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
			<label for="password">Password</label>
		</div>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
		<p class="mt-3 mb-3 text-muted text-center">&copy; Pinjam Yuk <?php echo date("Y"); ?></p>
	</form>
</body>
</html>
