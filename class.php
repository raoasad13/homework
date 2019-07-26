<?php

class Car {

	public $company = "Farari";
	public $color = "black";
	public $price = "12 million";



	public function cars()
	{
		return "beep";

	}

}

$farari = new Car ();

echo  $farari-> company;
echo "<br>";
echo $farari ->color;
echo "<br>";
echo $farari ->price;
echo "<br>";

echo $farari ->cars();

?>