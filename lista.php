<?php
include ('loja.php');
$sql_Id = "SELECT * FROM clientes order by Id_Cli";
$query_clientes = $mysqli->query($sql_Id) or die ($mysqli->error);
$num_clientes = $query_clientes->num_rows;

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LISTA DE CLIENTES</title>
</head>
<body>
	<h1><center>Lista de Clientes</h1>
	<p>CLIENTES CADASTRADOS NO SISTEMA<p/>
		<table border="1" cellpadding="10">
		<thead>
				<th>Código</th>
				<th>CPF</th>
				<th>Nome</th>
				<th>Data Nasc.</th>
				<th>Endereço</th>
				<th>Fone</th>
				<th>Ações</th>
				
					
				</td>
				
				</thead>
				<tbody>
				<?php if ($num_clientes==0)	{ ?>
				<tr>
							<center>
							<center> <td  colspan="6"> <center> Nenhum Cliente Cadastrado</td>
							</tr>
								<?php
							}else{
							while ($clientes = $query_clientes->fetch_assoc()){
							$fone ="Não Informado";
							if (!empty($clientes['fone'])){
							$fone =($clientes['fone']);

						}
						$nascimento ="Não Informado";
						if (!empty($clientes['nascimento'])){
						$nascimento = ($clientes['nascimento']);
					}
						?>
						<tr>
							<td><?php echo $clientes['Id_Cli']; ?></td>
							<td><?php echo $clientes['Cpf_Cli']; ?></td>	
							<td><?php echo $clientes['Nom_Cli']; ?></td>	
							<td><?php echo $clientes['DtN_Cli']; ?></td>
							<td><?php echo $clientes['End_Cli']; ?></td>
							<td><?php echo $clientes['Fon_Cli']; ?></td>
							<td>

							<a href="editar.php?Id_Cli=<?php echo $clientes['Id_Cli']; ?>">
					Editar</a>
					<a href="excluir.php? Id_Cli=<?php echo $clientes['Id_Cli']; ?>">
					Excluir </a>
							</td>
							
							</tr>
							<?php

							}//fim do while
							}?>	
					</tbody>
				</table>
</body>
</html>



<?php
