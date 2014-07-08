<!DOCTYPE html>
<html lang="en">

<head>
    <title>P2</title>
	<meta charset="utf-8">
	
	<!-- CSS -->
    <link href="Css/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="Css/style.css" rel="stylesheet">
	
	<!-- PHP-->
	<?php require "logic.php"; ?>
</head>

<body>
	<h1> xkcd Password Generator </h1>
	<div class="row">
		<div class= "col-md-4">
			<div class="jumbotron">
				<p class="password"> <?php echo $password ?> </p>
			</div>
			<form method = "POST" action= "index.php">
				<label> # of Words: </label>
				<input type="text" name="words"/>
				<br class="separation"/> Choose how to separate words: 
				<select name="separation">
					<optgroup>
						<option>Space </option>
						<option> - </option>
						<option> / </option>
					</optgroup>
				</select>
				<br/>
				<input type= "radio" name="number"/>
				<label> Add a number </label>
				<br/>
				<input type= "radio" name="symbol"/>
				<label> Add a symbol </label>
				<br/>
				<input type= "radio" name="upper"/>
				<label> Upper case first letter of password </label>
				<br/>
				<input class= "btn btn-primary" type= "submit" value = "Generate Password"/>
			</form>
		</div>
		<div class="col-md-8"> 
			<p> <img src="Images/xkcd_password_strength.png"/>	
		</div>
	</div>
</body>
