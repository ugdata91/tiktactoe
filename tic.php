<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tictactoe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.tic{
			width: 500px;
			margin: 0 auto;
			border: 1px solid black;
		}
		.tic table{
			width: 200px;
			margin: 0 auto;
			text-align: right;
		}
	
	</style>
</head>
<body>
	<!--
   <div class="tic text-center">

     <table>
     	<tr>
     		<td ><a href="tic2.php?x1=1"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=2"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=3"><img src="img/white.png"></a></td>
     	</tr>
     	<tr>
     		<td><a href="tic2.php?x1=4"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=5"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=6"><img src="img/white.png"></a></td>
     	</tr>
     	<tr>
     		<td><a href="tic2.php?x1=7"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=8"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=9"><img src="img/white.png"></a></td>
     	</tr>
     </table>
   </div>
-->
 <div class="tic text-center">
 <div class="container">
<?php
$p1=$_POST["p1"];
$p2=$_POST["p2"];

?>
	<div class="row">
		<div class="col-sm-6">
	      <input type="text" name="p1" class="form-control" value="<?php print $p1; ?>">
	  </div>
	  <div class="col-sm-6 text-right">
	     <input type="text" name="p2" class="form-control right" value="<?php print $p2; ?>">
    </div>
   </div>
</div>
     <table>
     	<tr>
     		<?php
     		print '
     		<td ><a href="tic2.php?x1=1&p1='.$p1.'&p2='.$p2.'"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=2"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=3"><img src="img/white.png"></a></td>
     	</tr>
     	<tr>
     		<td><a href="tic2.php?x1=4"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=5"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=6"><img src="img/white.png"></a></td>
     	</tr>
     	<tr>
     		<td><a href="tic2.php?x1=7"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=8"><img src="img/white.png"></a></td>
     		<td><a href="tic2.php?x1=9"><img src="img/white.png"></a></td>
     	</tr>
     	';
     	?>
     </table>

   </div>
</body>
</html>