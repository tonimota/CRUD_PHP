<?php
	require("config.php");

	$id = $_GET['id'];
	$users = R::load( 'cliente', $id );
	R::trash( $users);

	header("Location:./index.php");
?>