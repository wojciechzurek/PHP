<!DOCTYPE html>
<html>
	<head>
		<title>Strona Xa PHP</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<?php
			$a = $_GET["form_a"];
			$b = $_GET["form_b"];
			$c = $_GET["form_c"];
			echo "a: ".$a."</br>";
			echo "b: ".$b."</br>";
			echo "c: ".$c."</br>";
			echo "</br>";
			$delta = $b*$b-4*$a*$c;
			echo "Delta: ".$delta."<br>";
			if ($delta > 0)
			{
				$x1 = -$b-sqrt($delta)/2*$a;
				$x2 = -$b+sqrt($delta)/2*$a;
				
				echo "x1: ".$x1."<br>";
				echo "x2: ".$x2."<br>";
			}
			else if ($delta == 0)
			{
				$x = -$b/2*$a;
				echo "x: ".$x."<br>";
			}
		?>
	</body>
</html>