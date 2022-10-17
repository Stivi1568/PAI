<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

	<?php

		function print_array($array) {
			for($i=0; $i<sizeof($array); $i++) {
				echo $array[$i];
				if($i != sizeof($array)-1) {
					echo ", ";
				}
			}
		}


		function main() {
			//podpunkt 1
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 1</h3>";

			$array_liczby = [4,1,6,8,2,41,98,77,10,8];
			$zdanie = "Witam Pana szefa magistra inżyniera Jakuba Piskorowskiego";
			
			print_array($array_liczby);
			echo "</br>".$zdanie."</br>";

			//podpunkt 2
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 2</h3>";

			$array_zdanie = explode(' ', $zdanie);


			//podpunkt 3
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 3</h3>";

			echo "Ilość w array_liczby: ".count($array_liczby)."</br>";
			echo "Ilość w array_zdanie: ".count($array_zdanie)."</br>";
		
			//podpunkt 4
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 4</h3>";

			sort($array_liczby, SORT_NUMERIC);
			sort($array_zdanie, SORT_STRING);

			echo "Posortowana array_liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "Posortowana array_zdanie: ";
			print_array($array_zdanie); 
			echo"</br>";		
			
			//podpunkt 5
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 5</h3>";

			shuffle($array_liczby);
			shuffle($array_zdanie);

			echo "Potasowana array_liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "Potasowana array_zdanie: ";
			print_array($array_zdanie);
			echo "</br>";


			//podpunkt 6
			echo "<h3 style='margin-bottom: 1px;'>Podpunkt 6</h3>";

			$people = array("Peter", "Joe", "Glenn", "Cleveland");

			echo "Obecny element startowy: ".current($people)."<br>";

			next($people);
			next($people);

			echo "Obecny element po dwóch przejściach: ".current($people)."<br>";

			reset($people);

			echo "Obecny element po resecie: ".current($people)."<br>";
		}

		main();

	?>

</body>
</html>