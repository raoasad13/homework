<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu</title>
</head>
<body>

	<?php

	$t = date("l");
	$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

	 if ($t==$days[0]) {
	 echo "alu mattar";
	}

	elseif ($t==$days[1]) {

	echo "chicken";
}

elseif ($t==$days[2]) {

	echo "pizza";
}

elseif ($t==$days[3]) {

	echo "Daal chawal";
}

elseif ($t==$days[4]) {

	echo "birayani";
}
elseif ($t==$days[5]) {

	echo "Mutton";
}

else {
	echo "Bhindi";
}

	?>

</body>
</html>