<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AULA 08/05/2023</title>
</head>
<body>
	<form method="post">
		<h1> Cálculo do Valor do Terreno</h1>
		<label>Largura</label>
		<input type="number" step="0.01" name="lar">
		<br>
		<label>Comprimento do Terreno</label>
		<input type="number" step="0.01" name="com">
		<br>
		<label>Escolha o Setor da Cidade</label>
		<br>
		<label>Centro</label>
		<input type="radio" name="se" value="cen">
		<label>Periferia</label>
		<input type="radio" name="se" value="per">
		<label>Zona rural</label>
		<input type="radio" name="se" value="znr">
		<br>
		<br>
		<button type="submit">Comprar</button>
	</form>
	<?php
	  if (
		(isset($_POST['lar'])) and
        (isset($_POST['com'])) and
        (isset($_POST['se'])) 
	  ){
		
	$lar = $_POST['lar'];
	$com = $_POST['com'];
	$se  = $_POST['se'];

	if ((!empty($lar)) and (!empty($com))) {
	
	 if ($se=='cen'){
	    $vl = ($lar*$com*6473);
	    echo "Valor do terreno R$:", $vl;
	}
	if ($se=='per'){
       $vl = ($lar*$com*250);
       echo "Valor do Terreno R$:", $vl;
    }
    if ($se=='znr'){
       $vl = ($lar*$com*75);
       echo "Valor do Terreno R$:", $vl;
    }
    ?>

    <select >
       <option value="av">A Vista</option>
       <option value="ap">A Prazo</option>
    </select>
    <?php 


  }else{
  	echo "Preencha Todos os Campos";
  }

}

?>
</body>

</body>
</html>