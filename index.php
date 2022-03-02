<?php
echo "<h3>Aritmatika</h3>";
$a = 4;
$b = 19;
//menjumlahkan variabel a dengan variabel b
echo $a + $b;
?>

<br>

<?php
echo "<h3>Increment</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";
?>

<br>

<?php
echo "<h3>Penugasan</h3>";
$a = 10;
$b = 2;
echo "Hasil Penjumlahan dari $a ditambah $b adalah ".( $a + $b )."<br/>";
?>

<br>

<?php
echo "<h3>Relasi</h3>";
$a= 13;
$b= 2;
echo "Nilai \$a : ".$a."\n";
echo "Nilai \$b : ".$b."\n\n";
echo "\$a == \$b, Hasilnya :  ".($a==$b)."\n";
?>

<br>

<?php
echo "<h3>Logika</h3>";
$x=12; $y=21;
echo "$ x = $x, $ y = $y.";
echo "<br>";
if ($x=12 AND $y =21)
{
 echo "Benar <br>";
}else{
 echo "Salah";
}
?>

<br>

<?php
echo "<h3>Ternary</h3>";
$nilai = 9;
if ($nilai > 8) {
	echo 'Sangat Baik';
} else {
	echo 'Baik';
}
 ?>