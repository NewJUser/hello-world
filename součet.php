<html>
<?php

if(!isset($cislo)){
$cislo = 0;
}

$soucet = 0;

function delitelne3($cislo){ //To je co toto?
	if(is_int($cislo/3)){
		$soucet = $soucet + $cislo;
		$delitelne3 = TRUE;
	} else ($delitelne3 = FALSE;)
}

function delitelne5($cislo){
	if(is_int($cislo/5)){
		$soucet = $soucet + $cislo;
	}
}

for($cislo; $cislo < 1000; $cislo++){ //To snad neni pravda. Co takhle ++$cislo?
	delitelne3($cislo);
	if($delitelne3 == FALSE){
		delitelne5;
	}
}

echo($cislo);
</html>
