<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tictactoe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
   <div class="tic text-center">
 <div class="container">
<form action="tic.php" method="POST">
	<div class="row">
		<div class="col-sm-6">
	      <input type="text" name="p1" class="form-control" placeholder="Enter Player 1 -X">
	  </div>
	  <div class="col-sm-6 text-right">
	     <input type="text" name="p2" class="form-control right" placeholder="Enter Player 2 -O">
    </div>
   </div>
</div>
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
     <input type="submit" name="sub" value="Play!!!" class="form-control btn btn-warning" >
</form>
   </div>
</body>
</html>