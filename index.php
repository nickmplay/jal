<?php 
/*
include 'functions.php';
include 'dates.php';
include 'bankholidays.php';
*/

/*
ini_set('display_errors',1); 
error_reporting(E_ALL);
*/

require_once( "functions.php");
require_once( "bankholidays.php");
require_once( "dates.php");

/*
HitCounter("counter.txt", "reset");
$result = HitCounter("counter.txt","get");
echo "Raw: $result[0] / Unique: $result[1]";
*/

if(!isset($_REQUEST["attempt"])){
 require_once("input.html.php"); 
 exit();
}

HitCounter("counter.txt", "add");
$noDays = 0;
$start = validateDate($_REQUEST["startDate"]);
$end = validateDate($_REQUEST["endDate"]);
$xMax = count($dates["Pesach1"]);
$testOutput = "";

//initialise $results html table output
$results = '<table class="table table-bordered"><tr><th>';
$results .= 'Holiday</th><th>Date</th><th>Day of the week*';
$results .=  '</th></tr>';
$results .=  '<tr class="dull"><td>Start Date</td><td>' . $start;
$results .=  '</td><td>'. whatWeekday($start) .'</td>';

//for each holiday date
for ($x = 0; $x < $xMax; $x++){

	//loop through $_REQUEST[] submitted arrray
	foreach($_REQUEST as $key=>$value){
	//if ($x == 0) {echo "Key= " . $key . " Value= " . $value . '<br>';}
	
		//ignore non yom tov inputs
		if ($key == "startDate" || $key == "endDate" || $key == "attempt" ){continue;}
	
		/*capture relevant yom tov date
		foreach($dates[$key] as $k=>$v){
			//echo "$k and $v <br />";
		};
		*/
	
		$dateTemp = $dates[$key][$x];
		
		/*
		if ($key == "RoshHashana1" || $key == "Pesach1"  ) 
		{
			echo $dateTemp . " " . $key . " " . $start . " " . $end . ":";
			echo "a:" . !isBefore($start,$dateTemp) ;
			echo "b:" . !isBefore($dateTemp,$end) ;
			echo "<br />";
		}
		*/
	
		//ignore yom tovs that are out of range
		if (!isBefore($start,$dateTemp) || !isBefore($dateTemp,$end) ){continue;}
	
		//row html output $dates[$key]
		//class
		if (isBankHoliday($bankholidays, $dateTemp) || isWeekend($dateTemp) ){
			$results .= '<tr class="success"><td>';
		} else {
			$results .= '<tr class="danger"><td>';
			$noDays++;
		}

		//date
		$results .= $key . '</td><td>'. $dateTemp. '</td>';

		/*Bank Holiday?
		if (isset($bankholidays[$dateTemp])){
			$results .= $bankholidays[$dateTemp] ;
		} else {
			$results .= '-' . isBankHoliday($bankholidays, $dateTemp);
		}
		*/
		
		//day of the week		
		$results .= '<td>' . whatWeekday($dateTemp) ;
		
		//bank holiday?
		if (isset($bankholidays[$dateTemp])){
		$results .= " (Bank Holiday)"; }
		
		$results .= '</td></tr>';
	}
} 

$results .=  '<tr class="dull"><td>End Date</td><td>' . $end;
$results .=  '</td><td>'. whatWeekday($end) .'</td>';
$results .= '</table>';

//header message with result 
if ($noDays == 1){
	$noDaysMsg = "1 day ";
} else {
	$noDaysMsg = "$noDays days ";
}
$noDaysMsg .= "of annual leave";
	
include 'output.html.php';	

//echo $noDays;
//echo '<br /><a href="/JAL/form-bs.html">Return</a>';

?>