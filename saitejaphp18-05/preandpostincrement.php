<!DOCTYPE html>
<html>
<head>
	<title>static variable</title>
</head>
<body>
	<?php
	 $a=12;
     ++$a;
     echo $a;
     $a++;
     echo $a;
     echo "<br/>";
     $c="12";
     $d=12;
     var_dump($c==$d);
     echo "<br/>";
     var_dump($c===$d);
	 ?>;

</body>
</html>