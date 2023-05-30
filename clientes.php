<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CLIENTE</title>
</head>
<body>
	<form method="post">
		<br>
			<label>CÓDIGO:</label>
			<input type="number" name="Id_Cli"
			value="<?php if (isset($_POST['Id_Cli']))?>">
			<br>
			<label>CPF:</label>
			<input type="text" name="Cpf_Cli" placeholder="000.000.000-00"
			value="<?php if (isset($_POST['Cpf_Cli']))?>">
			<br>
			 <label>NOME:</label>
			<input type="text" name="Nom_Cli" value="<?php if (isset($_POST['Nom_Cli']))?>">
			<br>
			<label>DATA NASC.:</label>
			<input type="text" name="DtN_Cli" placeholder="0000/00/00"
			value="<?php if (isset($_POST['DtN_Cli']))?>">
			<br>
			 <label>ENDEREÇO:</label>
			<input type="text" name="End_Cli" value="<?php if (isset($_POST['End_Cli']))?>">
			<br>
		    <label>FONE:</label>
			<input type="text" name="Fon_Cli" placeholder="(99) 99999-9999"
			value="<?php if (isset($_POST['Fon_Cli']))?>">
			<br>
		   
		      <button type="submit"> Cadastrar</button>
	</form>
	
	<?php
				   if (count($_POST)>0){
	 include ('loja.php');
	
		$erro = false;
		$Id_Cli    = $_POST['Id_Cli'];
		$Cpf_Cli    = $_POST['Cpf_Cli'];
		$Nom_Cli   = $_POST['Nom_Cli'];
		$DtN_Cli   = $_POST['DtN_Cli'];
		$End_Cli    = $_POST['End_Cli'];
		$Fon_Cli   = $_POST['Fon_Cli'];
		
		
					}
	 	   			if (empty($Cpf_Cli)) {
	    			$erro = "Preencha o CPF do Cliente";
	    		    }

	    		    if (empty($Nom_Cli)) {
	    		    	$erro = "Preencha o Nome do Cliente";
	    		    	}
	    		    	
	 	   			if (empty($Fon_Cli)) {
	    			$erro = "Preencha o Número de Telefone do Cliente";
	    			 }

	    		    if (empty($DtN_Cli)) {
	    		    	$erro = "Preencha a Data de Nascimento do Cliente";
	    		    	}
	    		    

	    		    if (empty($End_Cli)) {
	    		    	$erro = "Preencha o Endereço do Cliente";
	    		    	}

	    		    if ($erro){
	    		    	echo "<p><b>ERRO:$erro</b><p>";
	    		    
	    		    }else{
	    		    $sql_Id = "INSERT INTO clientes (Cpf_Cli,Nom_Cli,DtN_Cli,End_Cli,Fon_Cli) VALUES  ('$Cpf_Cli','$Nom_Cli','$DtN_Cli','$End_Cli','$Fon_Cli')";	
	    		   
	    		    $deu_certo = $mysqli->query($sql_Id)or  die($mysqli->error);
	    		    if ($deu_certo){
	    		    		echo "cliente cadastrado com sucesso !!!";
	    		    		unset($_POST);

	    		    }
	    		    }
  		    
	?>

</body>
</html>