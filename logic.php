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
$num_wds_pass=4;
$error=0;

if(isset($_POST["words"]) && $_POST["words"] >0){
	$num_wds_pass = $_POST["words"]; //Gives the number of words in the password by the user
	//Generates the password
	for ($i=0; $i < $num_wds_pass; $i++){
		$rand = rand(0, $num_wds_dict);
		$password = $password." ".$words_array[$rand];
	}
}
else{
	$error=1;
	$password= "YOU HAVE NOT CHOOSEN A VALID NUMBER OF WORDS";
}

//This condition was made, so the first time the page is launched the message is not the error message
if (!isset($_POST["words"])){
	$password="CHOOSE NUMBER OF WORDS";
}

//Adds a number at the end, if requested by user
if(isset($_POST["number"]) && $error==0){
	$rand= rand(0,100);
	$password = $password.$rand;
}

if(isset($_POST["symbol"]) && $error==0){
	$password = $password."@";
}


?>