<?php
 
$words_array= "";

$dict= fopen ("dictionary.txt", "r");
$i = 0;

while (!feof($dict)){
	$words_array[$i]= fgets($dict);
	$i++;
}

fclose ($dict);

$num_wds_dict = count ($words_array);
$num_wds_pass = 4;
$password =" ";

for ($i=0; $i < 4; $i++){
	$rand = rand(0, $num_wds_dict);
	$password = $password." ".$words_array[$rand];
}

echo $password;


?>