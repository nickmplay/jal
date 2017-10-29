<?php

function isWeekend($date) {
	$day = $date[0] . $date[1];
	$month = $date[3] . $date[4];
	$year = $date[6] . $date[7] . $date[8] . $date[9];
	
	switch (date("D", mktime(0, 0, 0, $month, $day, $year))){
		case "Sat":
		case "Sun":
			return true;
			break;
		default:
			return false;
			break;
	}
}

function whatWeekday($date) {
	$day = $date[0] . $date[1];
	$month = $date[3] . $date[4];
	$year = $date[6] . $date[7] . $date[8] . $date[9];
	
	return date("D", mktime(0, 0, 0, $month, $day, $year));
}

function isBankHoliday($bankholidays, $date){
	
	if (isset($bankholidays[$date])){
		return true;
	} else {
		return false;
	}
}

function validateDate($date){
	
	$day = "";
	$month= "";
	$year= "";
	$sl_1 = 0;
	$sl_2 = 0;
	
	//day of $date
	$sl_1 = strpos($date,"/");
	$day = substr($date,0,$sl_1);
	
	//month of $date
	$sl_2 = strpos($date,"/",1+$sl_1);
	$month = substr($date,1+$sl_1,$sl_2-$sl_1-1);
	
	//year of $date
	$year = substr($date,$sl_2+1,4);
	
	//validate $day
	if (strlen($day)==1) {
		$day = "0" . $day;
	}
		
	//validate $month
	if (strlen($month)==1) {
		$month = "0" . $month;
	}
	
	//validate $year
	if (strlen($year) < 4) {
		$year = "20" . $year;
	}
	
	//return $day . " and/ " . $month . " and/ " . $year;
	//return "$year-$month-$day";
	return "$day/$month/$year";
}


function isBefore($date1, $date2){
	$day = $date1[0] . $date1[1];
	$month = $date1[3] . $date1[4];
	$year = $date1[6] . $date1[7] . $date1[8] . $date1[9];
	$d1 = date_create("$year-$month-$day");
	//echo date_format($d1, 'Y-m-d') . "<br />";

	$day = $date2[0] . $date2[1];
	$month = $date2[3] . $date2[4];
	$year = $date2[6] . $date2[7] . $date2[8] . $date2[9];
	$d2 = date_create("$year-$month-$day");
	//echo date_format($d2, 'Y-m-d') . "<br />";
	
	$days = date_diff($d1,$d2);
	
	/*print_r($days);
	if ($days->invert == 1){
		$msg = "-";
	} else {
		$msg = "+";
	}
	$msg .= $days->days;
	return $msg;
	*/
	
	if ($days->invert == 1){
		return false;
	} else {
		return true;
	}
	
}

function HitCounter($filename, $action) // Recipe 29
{
   // Recipe 29: Hit Counter
   //
   // This recipe accepts the filename of a counter which is
   // incremented or read back. optionally a folder and init-
   // ialization number can be passed. The arguments are:
   //
   //    $filename: Path/file name to save the counter details
   //               Must be unique to each counter.
   //    $action:   "reset"  = reset counts,
   //               "add"    = increment counts
   //               "get"    = return counts
   //               "delete" = delete counter
   //
   // This recipe returns an array. If $action is "get" the
   // 1st and 2nd elements contain the raw and unique hit
   // counts. Otherwise the return value is indeterminate.

   $data = getenv("REMOTE_ADDR") . "::" .
           getenv("HTTP_USER_AGENT") . "::" . 
            date('Y-m-d H:i:s')  ."::" ;
	foreach($_REQUEST as $key=>$value){
	$data .= $key . "-" . $value ."--" ; }
	$data .= "\n";
   
   switch ($action)
   {
      case "reset":
         $fp = fopen($filename, "w");
         if (flock($fp, LOCK_EX)) ;
         flock($fp, LOCK_UN);
         fclose($fp);
         return;

      case "add":
         $fp = fopen($filename, "a+");
         if (flock($fp, LOCK_EX))
            fwrite($fp, $data);
         flock($fp, LOCK_UN);
         fclose($fp);
         return;

      case "get":
         $fp = fopen($filename, "r");
         if (flock($fp, LOCK_EX))
            $file = fread($fp, filesize($filename) - 1);
         flock($fp, LOCK_UN);
         fclose($fp);
         $lines  = explode("\n", $file);
         $raw    = count($lines);
         $unique = count(array_unique($lines));
         return array($raw, $unique, $lines);

      case "delete":
         unlink($filename);
         return;
   }
}


?>