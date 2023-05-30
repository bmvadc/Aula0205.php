<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" contente="width=device-width,initial-scale=1">
<title>Aula0205 - PHP</title>
</head>
<body>
		<form method="post">
<label style " margin-right: 20px ;"> Valor1</label>
	<input style="width: 170px;" type="number" step="0.01"  name="v1" placeholder="Digite um Valor">
	<br>
	<label style="margin-right: 20px;"> Valor2</label> 
	<input style="width: 170px" type="number"  step="0.01" name="v2" placeholder="Digite um Valor">
	<br>

	<button type="submit" name="op" value="+">+</button>
	<button type="submit" name="op" value="-">-</button>
	<button type="submit" name="op" value="*">*</button>
	<button type="submit" name="op" value="/">/</button>
	<br>

	</form>
<?php
 if (
 	 (isset($_POST['v1']))
	 &&
	 (isset($_POST['v2']))
    	&&
    (isset($_POST['op']))
    )
   {
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $op = $_POST['op'];

    if ((!empty($v1))and(!empty($v2))){
      if ($op== '+'){
      	$v3 = $v1+$v2;
        echo "Valor da Soma $v3 ";
    }
       
      if ($op== '-'){ 
      	$v3 = $v1-$v2;
        echo "Valor da Subtração $v3 ";
    }
      if ($op== '*'){
      	$v3 = $v1*$v2;
        echo "Valor da Multiplicação $v3 ";
    }
      if ($op== '/'){
      	$v3 = $v1/$v2;
        echo "Valor da Divisão", number_format($v3,2);      	
    }
    }
    else{
          echo ("Preencha todos os campos!!!");	
    }
    }  
?>

</body>
</html>