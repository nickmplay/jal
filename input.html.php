<?php ?>
<!doctype html>
<html>
<head>
    <title>My Jewish Holidays</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
	.container {
		 text-align: center;
		 max-width:900px;
	}
	
	.form-inline {
		border: 1px solid black;
		padding:20px;
	}
	
	.input-group, .control-label {
		padding:10px;
	}
	
	.clear {
		clear:both;
	}
	
	
 </style>
 </head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="container">

<h1>Count Jewish Holidays</h1>

<p>Input your annual leave start date and end date, together with your chosen Jewish Holidays, 
and see how many days of annual leave you need to take off work</p>

<form role="form" class="form-inline" method="get" action="index.php">
 
 <div class="input-group date" data-provide="datepicker">
  <input placeholder="annual leave begins" name="startDate" id="startDate" type="text" class="form-control" value="1/1/16">
   <div class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
   </div>
 </div>

 <div class="input-group date" data-provide="datepicker">
  <input placeholder="annual leave ends" name="endDate" id="endDate" type="text" class="form-control" value="1/1/17">
   <div class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
   </div>
 </div>
 
 <div class="clear"></div>
 
 <div class="form-group">
 
  <label for="Purim" class="control-label">Purim
   <label class="checkbox-inline">
    <input type="checkbox" id="Purim" name="Purim" > 1
   </label>
  </label>
  <div class="clear"></div>
 
  <label for="Pesach1" class="control-label">Pesach
   <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox1" name="Pesach1" checked> 1
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox2" name="Pesach2" checked> 2
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox3" name="Pesach3"> 3
  </label>
   <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox4" name="Pesach4"> 4
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox5" name="Pesach5"> 5
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox6" name="Pesach6"> 6
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox7" name="Pesach7" checked> 7
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="inlineCheckbox8" name="Pesach8" checked> 8
  </label>  
 </label>
 <div class="clear"></div>
 
 <label for="Shavuot1" class="control-label">Shavuot
  <label class="checkbox-inline">
   <input type="checkbox" id="Shavuot1" name="Shavuot1" checked> 1
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Shavuot2" name="Shavuot2" checked> 2
  </label>
 </label>
 <div class="clear"></div>
 
  <label for="TishaBav" class="control-label">Tisha Bav
   <label class="checkbox-inline">
    <input type="checkbox" id="TishaBav" name="TishaBav" > 1
   </label>
  </label>
  <div class="clear"></div>

 <label for="RoshHashana1" class="control-label">Rosh Hashana
  <label class="checkbox-inline">
   <input type="checkbox" id="RoshHashana1" name="RoshHashana1" checked> 1
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="RoshHashana2" name="RoshHashana2" checked> 2
  </label>
 </label>
 <div class="clear"></div>

   <label for="YomKippur" class="control-label">Yom Kippur
   <label class="checkbox-inline">
    <input type="checkbox" id="YomKippur" name="YomKippur" checked> 1
   </label>
  </label>
  <div class="clear"></div>
 
  <label for="Sukkot1" class="control-label">Sukkot
   <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot1" name="Sukkot1" checked> 1
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot2" name="Sukkot2" checked> 2
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot3" name="Sukkot3"> 3
  </label>
   <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot4" name="Sukkot4"> 4
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot5" name="Sukkot5"> 5
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot6" name="Sukkot6"> 6
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Sukkot7" name="Sukkot7"> 7
  </label>  
 </label>
 <div class="clear"></div>
 
   <label for="ShminiAtzeret" class="control-label">Shmini Atzeret
   <label class="checkbox-inline">
    <input type="checkbox" id="ShminiAtzeret" name="ShminiAtzeret" checked> 1
   </label>
  </label>
  <div class="clear"></div>
 
    <label for="SimchatTorah" class="control-label">Simchat Torah
   <label class="checkbox-inline">
    <input type="checkbox" id="SimchatTorah" name="SimchatTorah" checked> 1
   </label>
  </label>
  <div class="clear"></div>
 
 <label for="Chanukah1" class="control-label">Chanukah
   <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah1" name="Chanukah1" checked> 1
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah2" name="Chanukah2"> 2
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah3" name="Chanukah3"> 3
  </label>
   <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah4" name="Chanukah4"> 4
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah5" name="Chanukah5"> 5
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah6" name="Chanukah6"> 6
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah7" name="Chanukah7"> 7
  </label>
  <label class="checkbox-inline">
   <input type="checkbox" id="Chanukah8" name="Chanukah8" checked> 8
  </label>  
 </label>
 <div class="clear"></div>
 
 <input type="hidden" name="attempt" value="Yes">
 
 </div>
 
 <div class="clear"></div>
 
 <div class="form-group control-label">
  <input type="submit" value="Calculate" />
 </div>
</form>

</div>

<script>

var sMin = <?php 
include 'dates.php';
echo '"' . $dates['MIN'][0] . '";'; 
?>

var sMax = <?php 
include 'dates.php';
echo '"' . $dates['MAX'][0] . '";'; 
?>

console.log( sMin );
console.log( sMax );

</script>
</body>
</html>