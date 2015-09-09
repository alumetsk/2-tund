<?php
	$first_name = "Kadri";
	$last_name = "Alumets";
	echo $first_name." ".$last_name;
	
	
?>
<br>
<?php
	$age = 5;
	/*testib loogikat, juhul kui vanus on väiksem kui 18 siis kirjuta "alaealine",
	muul juhul "täisealine"*/
	
	//if'i sisse loogikatehe
	if($age>=18) 
	{
	 echo "Täisealine"; 
	} 
	else 
	{
		echo"Alaealine";
	} 
?>
<br>
<?php

	//vastavalt vanusele trükime nii mitu korda sõna"palju"
	
	for($i=0;$i< $age;$i=$i+1)
	{ 
		echo "palju".$i." ";
	}
	
	echo "õnne!";


?>
<br>
<?php
	//kuupäev kujul: nädalapäev, kp kuu aasta
	echo date("l, j F Y e");

?>
