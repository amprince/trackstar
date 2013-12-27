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
	else {
		echo CJavaScript::jsonEncode($commission);
	}
	


?>