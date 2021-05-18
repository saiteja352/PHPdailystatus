<!DOCTYPE html>
<html>
<head>
	<title>print vs echo</title>
</head>
<body>
	<?php 
    $a=20;
    $b=21;
	function glo(){
        global $a;
        echo $a;

    }
    glo();
    echo $a;
	?>

</body>
</html>