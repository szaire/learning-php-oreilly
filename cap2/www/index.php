<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zipcode</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- <form method="post">
		<label for="zipcode">Zipcode</label><input type="text" name="zipcode">
		<input type="submit" value="Send">
	</form>
	<?php
		$zipcode = trim($_POST['zipcode']);
		$zip_length = strlen($zipcode);

		if (strlen(trim($_POST['zipcode'])) != 5)
		{
			print("Please, enter a zip code that is 5 characters long!");
		}
	?>
	<br><br> -->
	<?php
		$price = 5.0; $tax = 0.075;
		printf("The dish costs $ %.2f", $price * (1 + $tax));
	?>
	<br><br>
	<?php
		$a = 0;
		$zip = '4556';
		$now_date = new DateTime();
		$day = 2;
		$month = 9;
		$year = 2007;
		printf("Zip code is %05d. <br>", $zip);
		printf("The date is: %02d/%02d/%d.", $day, $month, $year);
	?>
	<br><br>
	<?php
		$a = 1;
		$min = -45;
		$max = 56;
		printf("This machine can operate in between %+d and %+d degress.", $min, $max);
	?>
	<br><br>
	<?php
		// Manipulating case
		print strtolower('Beef, CHICKEN, Pork, duCK <br>');
		print strtoupper('Beef, CHICKEN, Pork, duCK');
		print "<br><br>";
		print ucwords(strtolower("JOHN WICK"));
	?>
	<br><br>
	<?php
		$str1 = "The Fresh Fish with Rice Noodle was delicious, but I didn't like the Beef Tripe.";
		print $str1 . "<br>";
		print substr($str1, 0, 30) . " <b>(with substr)</b>";

		print "<br><br>";

		print 'Card: XX';
		$cardcode = '4000-1234-5678-9101';
		print $cardcode . "<br>";
		print substr($cardcode, -4, 4) . " <b>(with substr)</b>";

		print "<br><br>";

		$html = '<span class="{class}">Fried Bean Curd</span><br><span class="{class}">Oil-Soaked Fish</span>';
		$my_class = 'lunch';
		print str_replace('{class}', $my_class, $html);
		
		print '<br><br>';
	?>
</body>
</html>