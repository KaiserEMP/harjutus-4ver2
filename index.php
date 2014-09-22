<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-4
	</title>
</head>

<body>

	

	<h2>Arvutamine murd ja  täisarvudega</h2>

	
	<?php echo $float = 3.14; ?><br>

	<h2>Murdarvude ümardamine</h2>

	<?php echo round($float) ?>
	<br>
	<?php echo ceil($float) ?>
	<br>
	<?php echo floor($float) ?>

	<h2>Andmetüübi funktsioonid</h2>

	<?php

	$integer = 3;
	$mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"))

	?>

	<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>

	<h2>Jadad</h2>
		<?php
		    $numbers = array(4,8,15,16,23,42);
		?>

		<?php echo $numbers[1]; ?>
		<br>
		<?php echo $numbers[0]; ?><br>
		<?php echo $numbers[2]; ?><br>
		<?php echo $numbers[3]; ?><br>
		<?php echo $numbers[4]; ?><br>
		<?php echo $numbers[5]; ?><br>
		<?php echo $mixed[2]; ?>
		<br>



		<pre>
		<?php $mixed= array(6, "rebane", "koer", 5.5, array("x", "y", "z")); ?><br>
		<?php $mixed[5] = "kass"; ?>
			<?php $mixed[] = "hobune"; ?>
			<?php $mixed[2] = "kass"; ?>
			
		<?php echo $mixed[0];?><br>
		<?php echo $mixed[1];?><br>
		<?php echo $mixed[2];?><br>
		<?php echo $mixed[3];?><br>
			<?php echo $mixed[4][0];?><br>
			<?php echo $mixed[4][1];?><br>
			<?php echo $mixed[4][2];?><br>
			

			
		</pre>


		<h2>Associative arrays</h2>


		<?php $assoc = array("first_name" => "Kaits", "last_name" => "Sootla", "email" =>"kaisoku@khk.ee"); ?>
		<?php echo $assoc["last_name"]; ?> 
		<?php echo $assoc["first_name"] ?><br>
		<?php echo $assoc["email"] ?><br>
		<?php $assoc["age"] = 25; ?>
		<?php $assoc["first_name"] = "Peeter" ?>
		<?php $assoc["email"] = "kaisoku@khk.ee"; ?>

		<?php echo "Minu nimi on {$assoc["first_name"]}{$assoc["last_name"]}. Minu e-post on {$assoc["email"]}"?><br>


		<h2>Array functions</h2>

		<?php $numbers_2 = array(8,23,15,42,16,4); ?>

		<?php echo count($numbers_2); ?><br>

		<?php echo max($numbers_2); ?><br>

		<?php echo min($numbers_2); ?><br>

		<?php echo sort($numbers_2); ?><br>

		<?php
		    sort($numbers_2);
		    print_r($numbers_2);
		?>

				<?php
		    rsort($numbers_2);
		    print_r($numbers_2);
		?>

						<?php
		    implode($numbers_2);
		    print_r($numbers_2);
		?>

			<br>
			<?php $num_string = implode(" ja ", $numbers_2); ?>
			<?php echo $num_string; ?><br>

			<?php print_r(explode(" ja ", $num_string)); ?>
</body>

</html>