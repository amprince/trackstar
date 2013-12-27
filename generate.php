<?php 

	$merchant = array(1,2,3,4,5,6,7,8);
	$user = array(1,2,3);
	$affiliate = array(6,7,8,9,10,11);
	
	$datestart = strtotime('2013-01-01');//you can change it to your timestamp;
	$dateend = strtotime('2013-12-27');//you can change it to your timestamp;

	$daystep = 86400;
$datebetween = abs(($dateend - $datestart) / $daystep);
	
	//echo "\$randomday: $randomday\n";

	//echo date("Y-m-d", $datestart + ($randomday * $daystep)) . "\n";
	
	$min = 100;
	$max = 1000;
	$comm = 0 ;
	for($i=7; $i<=1007; $i++) {
		
		
		echo '"' . $i . '","';
		$k = array_rand($merchant);
		$v = $merchant[$k];
		echo $v . '","';
		$k = array_rand($affiliate);
		$v = $affiliate[$k];
		echo $v . '","';		
		$randomday = rand(0, $datebetween);
		echo date("Y-m-d", $datestart + ($randomday * $daystep))  . '","';
		$click = rand($min,$max) ;
		$sales = rand(0, $click);
		$comm = $sales*15 + $click*2;
		echo $comm . '","';
		echo $click . '","';
		echo $sales . '","';
		$k = array_rand($user);
		$v = $user[$k];
		echo $v . '","';	
		$date = date_create();
		echo date_format($date, 'Y-m-d H:i:s') . '"' ;
		
		
		
		echo "\n";
	}

?>