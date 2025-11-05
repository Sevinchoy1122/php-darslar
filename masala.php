<?php 
$x = " Hello\nWorld! ";
echo trim(str_replace("\n","<br>",$x));
echo "\n";
$ism = "Sarvar";
$familiya = "Karimov";
echo $ism." ".$familiya;
echo "\n";
$ism .= $familiya;
echo $ism;
echo "\n";
echo substr($familiya,2,3);
echo "\n";
echo substr($familiya,2);
echo "\n";
$dars = "Dars: PHP asoslari";
echo substr($dars,6,3);
?>
