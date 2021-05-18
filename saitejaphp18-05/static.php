<!DOCTYPE html>
<html>
<head>
	<title>static variable</title>
</head>
<body>
	<?php
	function teja(){
		static $x=10;
		echo $x;
		$x++;
	}

	teja();
	echo "<br>";
	teja();
	echo "<br>";
	teja();
	 ?>;

</body>
</html>