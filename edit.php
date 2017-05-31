<?php require_once 'config.php';

 $id = $_GET['id'];

?>

<html>
<body>
<form action="editConfirm.php" method="post" name="form2">
<?php

$users = R::load( 'cliente', $id );
	echo("Nome:<input type='text' name='nome' value='".$users->nome."'></input></br>Email:<input type='text' name='email' value='".$users->email."'></input></br>");
?>
<input type="hidden" name="id" value="<?php echo $id; ?>"></input>
<input type="submit" value="enviar"/>
</form>


</body>

</html>