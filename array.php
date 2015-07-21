<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Array</title>
	</head>
	<body>
		<?php
			
			$numbers = array(4,8,7,1,5,4,9,10);
			echo $numbers[1];
		?>
		
		<br />
		
		<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
		<?php echo $mixed[2]; ?><br />
		<?php //echo $mixed[3]; ?><br />
		<?php //echo $mixed ?><br />
		
		<?php echo $mixed[3][1]; ?><br />
		
		<?php $mixed[2] = "cat"; ?>
		<?php $mixed[4] = "mouse"; ?>
		<?php $mixed[] = "horse"; ?>
		
		<pre>
		<?php echo print_r($mixed); ?>
		</pre>
		
		<?php 
			//PHP 5.4 added the short array syntax.
			$array = [1,2,3];
		?>
	</body>
</html>

