<html>

<body>

<?php
	$x=2;
	echo "Konversi Suhu<br>";
	echo "Nilai suhu yang ingin dikonversi\t:$x<br>";
	
	$ctof=($x/5)*9+32;
	$ctor=($x/5)*4;
	$ctok=$x+273.15;
	$ctork=($ctok/5)*9;
	
	$ftoc=round((($x-32)/9)*5,3);
	$ftor=round((($x-32)/9)*4,3);
	$ftok=$ftoc+273.15;
	$ftork=$x+459.67;
	
	$rtoc=($x/4)*5;
	$rtof=($x/4)*9+32;
	$rtok=$rtoc+273.15;
	$rtork=($rtok/5)*9;
	
	$ktoc=$x-273.15;
	$ktof=($ktoc/5)*9+32;
	$ktor=($ktoc/5)*4;
	$ktork=($x/5)*9;
	
	$rktoc=round((($x-491.67)/9)*5,3);
	$rktof=$x-459.67;
	$rktok=round(($x/9)*5,3);
	$rktor=round((($x-491.67)/9)*4,3);
	
	echo "Konversi dari Celcius<br>";
	echo "hasil : Celcius = $x oC, Fahrenheit = $ctof oF, Rheamur = $ctor oR, Kelvin = $ctok oK, Rankine = $ctork oRa<br>";
	echo "<br>";
	echo "Konversi dari Fahrenheit<br>";
	echo "hasil : Fahrenheit = $x oF, Celcius = $ftoc oF, Rheamur = $ftor oR, Kelvin = $ftok oK, Rankine = $ftork oRa<br>";
	echo "<br>";
	echo "Konversi dari Rheamur<br>";
	echo "hasil : Rheamur = $x oR, Celcius = $rtoc oC, Fahrenheit = $rtof oF, Kelvin = $rtok oK, Rankine = $rtork oRa<br>";
	echo "<br>";
	echo "Konversi dari kelvin<br>";
	echo "hasil : kelvin = $x oK, Celcius = $ktoc oC, Fahrenheit = $ktof oF, Rheamur = $ktor oR, Rankine = $ktork oRa<br>";
	echo "<br>";
	echo "Konversi dari Rankine<br>";
	echo "hasil : Rankine = $x oRa, Kelvin = $rktok oK, Celcius = $rktoc oC, Fahrenheit = $rktof oF, Rheamur = $rktor oR<br>";
?>

</body>

</html>