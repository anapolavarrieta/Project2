<?php
 
$words_array= "";

$dict= fopen ("dictionary.txt", "r");
$i = 0;

//Goes to every line of the dictionary and adds it to the array
while (!feof($dict)){
	$words_array[$i]= fgets($dict);
	$i++;
}

fclose ($dict);

$num_wds_dict = count ($words_array);
$password =" ";	
if (isset($_POST["words"])){
	$num_wds_pass = $_POST["words"]; //Gives the number of words in the password by the user
}
else{
	$num_wds_pass= 4;
}

//Generates the password
for ($i=0; $i < $num_wds_pass; $i++){
	$rand = rand(0, $num_wds_dict);
	$password = $password." ".$words_array[$rand];
}

//Adds a number at the end, if requested by user
if(isset($_POST["number"])){
	$rand= rand(0,100);
	$password = $password.$rand;
}

if(isset($_POST["symbol"])){
	$password = $password."@";
}


?>