<?php
	require_once 'config.php';
	$user = R::dispense( 'cliente' );
	    $user->nome = $_POST['name'];
		$user->email = $_POST['email'];
		$user->senha = $_POST['senha'];	
	    $id = R::store( $user );
		header('Location:./index.php');
	exit;
?>