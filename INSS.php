<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INSS - PHP</title>
</head>
<body bgcolor="#D8BFD8">
<form method="post">
<h1 style="color:#6A5ACD ;border-radius: black; ">DIA DE PAGAMENTO!!!</h1>

   <label>total de horas:</label>
     <input type="number" step="0.01" name="hor" placeholder="informe um valor" >
     <br>
   <label>cargo do colaborador:</label>
      <br>
   <label>gerente de desenvolvimento</label>
        <input type="radio" name="se" value="ge">
   <label>analista de sistemas</label>
        <input type="radio" name="se" value="al">
   <label>programador</label>
        <input type="radio" name="se" value="pr">
   <label>tester</label>
        <input type="radio" name="se" value="te">
        <br>
   <button type="submit" name="op" value="op" style="margin-left: 110px;">calcular</button> 
</form>
    <?php 

     if (
                (isset($_POST['hor']))
                and
                (isset($_POST['se']))
                
                
                
               ){


         $hor = $_POST['hor'];
         $se = $_POST['se']; 
     
     if ((!empty($hor))and(!empty($se))){

       if ($se=='ge') {
          	 $vl = ($hor*50);
          	 echo "valor bruto em R$:", $vl;
             }
          	 $vl = ($hor*35);
       
       if ($se=='al') {
          	 echo "valor bruto em R$:", $vl;
             }

       if ($se=='pr') {
          	 $vl = ($hor*25);
          	 echo "valor bruto em R$:", $vl;
             }      

       if ($se=='te') {
          	 $vl = ($hor*11);
          	 echo "valor bruto  em R$:", $vl;
             }
    
      if ($vl<=1320) {
      	$vd = $vl*0.075;
      	$sl = $vl-$vd;
      	?>
        <br>
      	<?php
      	echo "valor descontado $vd";
         ?>
         <br> 
         <?php 
         echo "salario liquido:",$sl;
         
      }
       
       if (($vl>1320)and($vl<=2571.29)) {
        $vd = $vl*0.090;
        $sl = $vl-$vd;
        ?>
        <br>
        <?php
        echo "valor descontado $vd";
         ?>
         <br> 
         <?php 
         echo "salario liquido:",$sl; 


        } 

        if (($vl>2571.29)and($vl<=3856.94)) {
        $vd = $vl*0.12;
        $sl = $vl-$vd;
        ?>
        <br>
        <?php
        echo "valor descontado R$ $vd";
         ?>
         <br> 
         <?php 
         echo "salario liquido R$ ",$sl; 


        } 

       if ($vl>3856.94) {
        $vd = $vl*0.14;
        $sl = $vl-$vd;
        ?>
        <br>
        <?php
        echo "valor descontado R$ $vd";
         ?>
         <br> 
         <?php 
         echo "salario liquido R$ ",$sl; 


        } 

       }
      }
     ?>





</body>
</html>