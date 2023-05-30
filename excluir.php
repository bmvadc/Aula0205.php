<?php 
 if (isset($_POST['confirma'])){
     include ('loja.php');
	$Id = intval($_GET['Id_Cli']);
	$sql_clientes = "DELETE FROM clientes WHERE Id_Cli = '$Id'";
	$sql_query = $mysqli->query($sql_clientes) or die (mysqli->error);
	if ($sql_query){
		echo "Cliente Excluído com Sucesso";
		die();
	}

 }
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>EXCLUIR CLIENTE</title>
 </head>
 <body>
 	<h1> Tem Certeza que Deseja Excluir o Cliente?</h1>

 	<form method="post">
 		<a style="margin-right: 40px;" href="lista.php"> Não</a>
 			<button type="submit" name="confirma"> Sim
 			</button>
 	</form>
 
 </body>
 </html>
