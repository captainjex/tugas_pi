<html>

<body>

<?php
	echo "Konversi Bilangan<br><br>";
	echo "Bilangan desimal<br>";
	for($x=1;$x<=16;$x++)
	{
		echo "$x<br>";
	}
	echo "<br>";
	echo "Bilangan biner<br>";
	for($x=1;$x<=16;$x++)
	{
		echo decbin($x)."<br>";
	}
	echo "<br>";
	echo "Bilangan octaldesimal<br>";
	for($x=1;$x<=16;$x++)
	{
		echo decoct($x)."<br>";
	}
	echo "<br>";
	echo "Bilangan hexadesimal<br>";
	for($x=1;$x<=16;$x++)
	{
		echo dechex($x)."<br>";
	}
	echo "<br>";
?>

</body>

</html>