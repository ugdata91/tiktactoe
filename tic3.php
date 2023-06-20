<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tictactoe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
         if(isset($_GET["o1"])){

         }
         	$x1=$_GET["x1"];
         	$o1=$_GET["o1"];
	?>

     <table>
     	<tr>
     		<td>
     			<?php if($x1==1) {print '<img src="img/x.png">';}elseif($o1==1){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=1"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==2) {print '<img src="img/x.png">';}elseif($o1==2){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=2"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==3) {print '<img src="img/x.png">';}elseif($o1==3){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=3"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<?php if($x1==4) {print '<img src="img/x.png">';}elseif($o1==4){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=4"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==5) {print '<img src="img/x.png">';}elseif($o1==5){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=5"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==6) {print '<img src="img/x.png">';}elseif($o1==6){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=6"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<?php if($x1==7) {print '<img src="img/x.png">';}elseif($o1==7){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=7"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==8) {print '<img src="img/x.png">';}elseif($o1==8){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=8"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==9) {print '<img src="img/x.png">';}elseif($o1==9){print '<img src="img/o.png">';} else {print '<a href="tic4.php?o1='.$o1.'&x1='.$x1.'&x2=9"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     </table>
</body>
</html>