<?php
	require 'config.php';
	$id = $_POST['id'];


	$users = R::load( 'cliente', $id );
	$users->nome=$_POST['nome'];
	$users->email=$_POST['email'];
	R::store($users);

	header("Location:./index.php");
?>