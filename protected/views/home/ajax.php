<?php

	if($intervalType == "weekly") {
		
		$arr = array();
		
		foreach($commission as $item) {
			$ddate = $item->date_of_report ;
			$duedt = explode("-", $ddate);
			$date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
			$week  = (int)date('W', $date);
			if(isset($arr[$week])) {
				$temp = $arr[$week] ;
				
				$temp['no_of_clicks'] += $item->no_of_clicks;
				
				$temp['no_of_sales'] += $item->no_of_sales;
				$temp['commission'] += $item->commission;
				$arr[$week] = $temp ;
				
			} else {
				$temp = array(
					'date_of_report' => "Week $week",
					'no_of_clicks' => $item->no_of_clicks ,
					'no_of_sales' => $item->no_of_sales,
					'commission' => $item->commission,
				) ;				
				$arr[$week] = $temp;
			}
		}
		
		$res = array();
		foreach($arr as $item) { 
			array_push($res, $item);
		}
		
		echo json_encode($res);
	} 
	else if($intervalType == "monthly") {
		
		$arr = array();
		
		foreach($commission as $item) {
			$ddate = $item->date_of_report ;
			$month = date('F', strtotime($ddate));
			$mn = date('m', strtotime( $ddate ));
			if(isset($arr[$mn])) {
				$temp = $arr[$mn] ;
				$temp['no_of_clicks'] += $item->no_of_clicks;
				$temp['no_of_sales'] += $item->no_of_sales;
				$temp['commission'] += $item->commission;
				$arr[$mn] = $temp ;
				
			} else {
				$temp = array(
					'date_of_report' => "$month",
					'no_of_clicks' => $item->no_of_clicks ,
					'no_of_sales' => $item->no_of_sales,
					'commission' => $item->commission,
				) ;				
				$arr[$mn] = $temp ;
			}
		}
		$res = array();
		foreach($arr as $item) { 
			array_push($res, $item);
		}
		
		echo json_encode($res);
	} 
	else if($intervalType == "specific"){
	
		$arr = array();
		$i=0;
		$x=0;
		$show = array();
		//$date2=date_create("05.01.2013");
		foreach($commission as $item) {
			$actualgap = $intervalValue;
			$ddate = $item->date_of_report ;
			$duedt = explode("-", $ddate);
			$date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
			$day = (int)date('mday', $date);
			$gap  = date('d.m.Y', $date);
			
			//$tdate = date('d.m.Y', $date2);
			//$diff=date_diff($gap,$date2);
			
			//$gap = $gap/$actualgap;
			//for($i=0; $i<$actualgap; $i++){
			if(isset($arr[$gap])) {
				$temp = $arr[$gap] ;
				
				$temp['no_of_clicks'] += $item->no_of_clicks;
				
				$temp['no_of_sales'] += $item->no_of_sales;
				$temp['commission'] += $item->commission;
				$arr[$gap] = $temp ;
				if(($day % $intervalValue)==0)
				{$x++;}
				else
				{$show[$x] += $temp;}
				
			} else {
				$temp = array(
					'date_of_report' => "Interval $x $gap",
					'no_of_clicks' => $item->no_of_clicks ,
					'no_of_sales' => $item->no_of_sales,
					'commission' => $item->commission,
				) ;				
				$arr[$gap] = $temp;
				$show[$x] = $temp;
				$i++;
			}
			
		}
		
		$res = array();
		foreach($arr as $item) { 
			array_push($res, $item);
		}
		
		echo json_encode($res);
	
	}
	else {
		echo CJavaScript::jsonEncode($commission);
	}
?>