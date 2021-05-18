<!DOCTYPE html>
<html>
<head>
	<title>print vs echo</title>
</head>
<body>
	<?php 
	$a=12;
    $b=13;
    echo $a+$b;
    $c=15;
    $d=14;
    $e="$c"+"$d";
    var_dump($e);
    $g="16";
    $f="17";
    $h=$g+$f;
    var_dump($h);
    var_dump($g);
	?>

</body>
</html>