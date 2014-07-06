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
$num_wds_pass = 4;
$password =" ";

//Generates the password
for ($i=0; $i < 4; $i++){
	$rand = rand(0, $num_wds_dict);
	$password = $password." ".$words_array[$rand];
}



?>