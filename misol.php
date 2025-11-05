<?php  
 $i = 1;
while( $i < 21){
    echo $i." ,";
    $i++;
}
echo "\n";
for($i = 1; $i <= 20; $i++){
    echo $i.", ";
}
echo "\n";
for($i = 1; $i <= 20; $i ++ ){
    if( $i % 2 == 0){
        echo $i." ";
    }
}

echo "\n";
for($i = 20; $i >= 1; $i --){
    echo $i." "; 
}
echo "\n";

$n = 5;
$k = 1;
for($i = 1; $i <= $n; $i++){
    $k *= $i;
}
echo "Kopaytma: $k";
 echo "\n";

 $i = 1;
$summa = 0;
while($i <= 10){
    $summa += $i;
    $i++;
}
echo "Yig'indi: $summa";


?>