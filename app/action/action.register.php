<?php
	
	/* ------------------------------------------------------------------- */

	$u = $_POST['username'];
	$p = $_POST['password'];
	$e = $_POST['email'];
	$a = $_POST['alamat'];
	$n = $_POST['no'];

	/* ------------------------------------------------------------------- */

	
	$x = new akun($db);
	$x -> daftar($u,$p,$e,$a,$n);
