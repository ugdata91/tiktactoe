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
	?>

     <table>
     	<tr>
     		<td>
     			<?php if($x1==1) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=1&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==2) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=2&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==3) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=3&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<?php if($x1==4) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=4&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==5) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=5&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==6) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=6&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     	<tr>
     		<td>
     			<?php if($x1==7) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=7&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==8) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=8&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     		<td>
     			<?php if($x1==9) {print '<img src="img/x.png">';}else {print '<a href="tic3.php?o1=9&x1='.$x1.'"><img src="img/white.png"></a>';} ?>
     		</td>
     	</tr>
     </table>
</body>
</html>