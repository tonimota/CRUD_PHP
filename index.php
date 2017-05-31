<?php 
	require("config.php");
?>

<html>
<head>	
	<title>Crud PHP</title>
</head>

<body>


	<table width='80%'>

	<tr bgcolor='#CCCCCC'>
		<td>Nome</td>
		<td>Email</td>
		<td>Atualizar</td>
		<td>Excluir</td>
	</tr>
	<?php
	
	//Preencher de acordo com o nome da tabela
	$users = R::getAll( 'SELECT *from cliente' );
    foreach( $users as $user) {
        echo ("<tr><td>".$user['nome']."</td>");
		echo ("<td>".$user['email']."</td>");
		echo ("<td><a href='edit.php?id=".$user['id']."'>edit</a></td>");
		echo ("<td><a href='delete.php?id=".$user['id']."'>delete</a></td></tr>");
    }
	?>
	<a href="add.html">Adicionar Usuarios</a>

</body>
</html>