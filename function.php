<?php  
function Hello() {
    echo "Hello world! \n";
}
Hello();
function yigindi(){
    $summa = 0;
    for($i = 1; $i <= 10; $i++){
        $summa += $i;
    }
    echo "Yig'indi: $summa";
}
yigindi();
echo "\n";
function ikkisonniqoshish($birinchi_son, $ikkinchi_son){
    echo $birinchi_son + $ikkinchi_son;
}

ikkisonniqoshish(52,13);

?>