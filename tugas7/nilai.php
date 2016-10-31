<html>

<body>

<?php
	echo "NIM\t\t: A11.2014.08073<br>";
	echo "Nama\t\t: Muhammad Arji' Sharofuddin<br>";
	echo "N.Tugas\t\t: 85<br>";
	echo "N.UTS\t\t: 90<br>";
	echo "N.UAS\t\t: 80<br>";
	$tugas=0.2*85;
	$uts=0.35*90;
	$uas=0.45*80;
	$akhir=$tugas+$uas+$uts;
	echo "N.Akhir\t\t: $akhir<br>";

	switch($akhir)
	{
		case ($akhir>=85):
			echo "N.Huruf\t\t: A";
			break;
		case (68.5<=$akhir&&83.4>=$akhir):
			echo "N.Huruf\t\t: B";
			break;
		case (58.5<=$akhir&&68.4>=$akhir):
			echo "N.Huruf\t\t: C";
			break;
		case (40<=$akhir&&58.4>=$akhir):
			echo "N.Huruf\t\t: D";
			break;
		default:
			echo "N.Huruf\t\t: E";

	}

?>

</body>

</html>