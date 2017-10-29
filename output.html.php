<!doctype html>
<html>
<head>
    <title>Results</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	table {
		border-collapse:collapse;
	}
	
	.background-red {
		background-color:#f2dede;
	}
	
	.clear {
		clear:both;
	}
	
	.ad {
		max-width:600px;
		height:100px;
		margin:auto;
		text-align:center;
		background-color:#A0ACB0;
		margin-bottom:40px;
		padding-top:40px;
	}

	.dull, th {
		background-color:#A0ACB0;
		color:white;
	}
	
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<?php include_once("analyticstracking.php") ?>

<div class="container">
 <h1>You will need to take <span class="background-red">
 <?php echo $noDaysMsg; ?></span> for the following holidays:</h1>
 
 <?php echo $results; ?>
 <div class="clear"></div>
 
 <?php echo $testOutput; ?>
 <div class="clear"></div>

 <p>*Note: the Jewish holiday begins at sunset of the prior day</p>

 <div class="sendLink">
 <label for="linky">Link to these results:</label>
 <input type="text" name="linky" value='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>' />
 </div>
 <div class="clear"></div>
 
 <a href="http://www.myjewishholidays.org.uk/">Back</a>
 
<!--
 <div class="ad">Google ad</div>
--> 

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$("input[type='text']").on("click", function () {
   $(this).select();
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>