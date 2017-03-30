<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kodune 7</title>
	<style type="text/css">
	</style>
</head>
<body>
<h2>Tagurpidi tekst!</h2>
<h4>Variant 1</h4>
<?php
$str = "Tagurpidi tekst!";

for ($i=strlen($str)-1; $i>=0; $i--){
    $str .= $str[$i]; //https://www.w3schools.com/php/php_operators.asp
	}
echo "$str";
?>
<h4>Variant 2</h4>
<?php
$stri = "Tagurpidi tekst!";

for ($i=strlen($stri)-1; $i>=0; $i--){
    echo $stri[$i];
}
?>
<h4>Variant 3</h4>
<?php
$string = "Tagurpidi tekst!";
$j=1;
for ($i=strlen($string)-1; $i>=0; $i--){
    echo $a = substr("$string", $i, $j);
}
?>

</body>
</html>