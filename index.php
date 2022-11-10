

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calculator</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="card">
			<h3 class="text-center"> Calculator</h3>
			<div class="card-body">
				<form class="form-group" method="post" action='include/class.inc.php'>
					<label>number1</label>
					<input type="number" name="num1" class="form-control"><br>
					<select name="operation" class="form-control">
					  <option value="subtract">substract</option>
					  <option value="plus">addition</option>
					  <option value="multiple">multiple</option>
					  <option value="divided">divided</option>
					</select>  
					<br>
					<label>number2</label>
					<input type="number" name="num2" class="form-control"><br><br>
					<input type="submit" value="submit" class="btn btn-primary">
				</form>
			</div>
			
		</div>
		
	</div>
	
</body>
</html>