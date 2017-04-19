<!DOCTYPE html>
<html>
	<head>
		<title>Strona Xa PHP</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<canvas id="myCanvas"  width="800" height="500" style="border:1px solid #d3d3d3;">
			Your browser does not support the HTML5 canvas tag.
			Twoja przegladarka nie obsluguje canvasu!
		</canvas>
		<?php
			$x = $_GET["form_srodek_x"];
			$y = $_GET["form_srodek_y"];
			$promien = $_GET["form_promien"];

			echo '<script>
				var c = document.getElementById("myCanvas");
				var ctx = c.getContext("2d");
				ctx.clearRect(0,0,800,500);
				
				ctx.beginPath();
				ctx.arc('.$x.','.$y.','.$promien.',0,2*Math.PI);
				ctx.stroke();
				</script>
			';
		?>
	</body>
</html>