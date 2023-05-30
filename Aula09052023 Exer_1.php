<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AULA 09/05/2023 Exer_1</title>
</head>
<body>
	<form method="post">
		<h1> Salário por Hora Trabalhada</h1>
		<label>Horas Trabalhadas</label>
		<input type="number" step="0.01" name="ht">
		<br>
		
		<input type="radio" name="cg" value="gd">		
		<label>Gerente Desenvolvimento</label>
        
		<br>
		<input type="radio" name="cg" value="as">
		<label>Analista de Sistema</label>
		
		<br>
        <input type="radio" name="cg" value="pr">
		<label>Programador</label>
		
		<br>
		<input type="radio" name="cg" value="tx">
		<label>Tester</label>
		
		<br>
		<button type="submit">Calcular</button>
	</form>
	<?php
	if (
		(isset($_POST['ht'])) and
        (isset($_POST['cg'])) 
	  ){
		
	$ht =  $_POST['ht'];
	$cg =  $_POST['cg'];
	

	if ((!empty($ht)) and (!empty($cg))) { 
	
	if ($cg=='pr'){
	      $vl = ($ht*25);
	      echo "Salário do Programador R$:", $vl;
	}
	if ($cg=='gd'){
       $vl = ($ht*50);
       echo "Salário do Gerente de Desenvolvimento R$:", $vl;
    }
    if ($cg=='as'){
       $vl = ($ht*35);
       echo "Salário do Analista de Sistema R$:", $vl;
    }
    
    if ($cg=='tx'){
       $vl = ($ht*11);
       echo "Salário do Tester de Sistema R$:", $vl;
    }

    if ($vl<=1320){
    	?>
    	<br>
        
        <?php
       	$de = $vl*0.075;
    	echo "Desconto ",$de;
    	?>
    	<br>

        <?php
        echo "Total a receber:",$vl-$de;

    }
    }

    if (($vl>1321) and ($vl<=2572)) {
    	?>
    	<br>

        <?php
       	$de = $vl*0.09;
    	echo "Desconto ",$de;
    	?>
    	<br>

        <?php
        echo "Total a receber:",$vl-$de;

    }
    }

    if (($vl>2572) and ($vl<=3857)) {
    	?>
    	<br>

        <?php
       	$de = $vl*0.12;
    	echo "Desconto ",$de;
    	?>
    	<br>

        <?php
        echo "Total a receber:",$vl-$de;

    }
    
    if ($vl>3858) {
    	?>
    	<br>
        
        <?php
       	$de = $vl*0.14;
    	echo "Desconto ",$de;
    	?>
    	<br>
      
        <?php
        echo "Total a receber:",$vl-$de;

    }
 
    else{
  	
  	    echo "Preencha Todos os Campos";

  }  

?>

</body>
</html>