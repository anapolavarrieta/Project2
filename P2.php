<!DOCTYPE html>
<html lang="en">

<head>
    <title>P2</title>
	<meta charset="utf-8">
	<?php require "logic.php"; ?>
</head>

<body>
	<h1> xkcd Password Generator </h1>
	<p> <?php echo $password ?> </p>	
 	<form method = "POST" action= "P2.php">
		<label> # of Words: </label>
		<input type="text" name="words"/>
		<br/> Choose how to separate words: 
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
		<input type= "submit" value = "Generate Password"/>
	</form>

	<p> <img src="Images/xkcd_password_strength.png"/>	
</body>
