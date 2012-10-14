<?php
require_once("/var/www/icerunner.co.uk/railhack/stats.php");

/*
$percent_on_time=58.5657370517928;
$percent_late=40.6374501992032;
$latest_train_id=491E78MO13;
$latest_train_secs=2520;
$total_seconds_late=24960;
$num_trains_early=50;
$num_trains_late=102;
$num_trains_on_time=97;
$num_trains_off_route=2;
*/

	if ($percent_on_time > 60)
	{
		$bgcolour = '#ff7575';
		$text = '#000000';
	}
	elseif (60 > $percent_on_time && $percent_on_time > 40)
	{
		$bgcolour = '#f7d358';
		$text = '#000000';
	}
	else
	{
		$bgcolour = '#0afe47';
		$text = '#000000';
	}
?>

<html>
	<head>
		<title>Dank Spangle Memorial Train Timeliness Reckoning</title>
		<script type="text/javascript" src="jquery-latest.js"></script> 
		<script type="text/javascript" src="jquery.tablesorter.min.js"></script> 
		<script type="text/javascript">
		$(document).ready(function() 
			{ 
				$("#myTable").tablesorter( {sortList: [[1,1], [0,0]]} ); 
			} 
		); 
		
		</script>

		<style>
			body {
				background: <?php echo $bgcolour; ?>;
				color: <?php echo $text; ?>;
				font-family: verdana,arial,helvetica,sans-serif;
				font-size: 22px;
			}
			
			#pagetitle
			{
				background: #fff;
				color: #000;
				padding-left: 20%;
				padding-right: 20%;
				margin-top: 10%;
				text-align: center;
			}
			#content
			{
				margin-left: 20%;
				margin-right: 20%;
				padding-left: 2em;
				padding-right: 2em;
				margin-top: 5%;
				border-left: #000 solid 3px;
				border-right: #000 solid 3px;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
		<h1 id="pagetitle">Dank Spangle Memorial Train Timeliness Reckoning</h1>
		<div id="content">
		<p>The prognosis is <?php 
		
		if ($percent_on_time > 60)
		{
			print "curious. It doth seem rather unlikely that the rail network would run so smooth.";
		}
		elseif (60 > $percent_on_time && $percent_on_time > 40)
		{
			print "monostable. One cannot really expect more from such an outmoded infrastructure.";
		}
		else
		{
			print "... well ... leaves on the line? Tracks too hot? Wrong type of snow? Nothing's moving anyhow.";
		} 
		
		?></p>
		<p>Avoid at all costs train <?php echo $latest_train_id; ?> which is <?php echo $latest_train_secs/60; ?> minutes late at <?php echo $latest_train_location; ?>. Send protestations about this situation to <?php echo $latest_train_operator; ?> who run this shoddy service.</p>
		
		<?php
		
		include_once('table.php');
		
		?>
		</div>
		</div>
	</body>
</html>
