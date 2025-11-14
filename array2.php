<?php  
$users = [
    "ism" => "ali",
    "familiya" => "ozodov",
    "t_yili" => 1986
];
print_r( $users);
$users['familiya'] = 'komilov';
echo$users['familiya'];
echo "\n";
foreach($users as $key => $item){
    echo $key." ".$item.",";
}
$son = [];
$son['ism1'] = "test1";
$son[0] = 12;
$son[1] =19;
$son['ism'] = "test";
print_r($son);
$sonlar = [5,4,1,67,23,89,12,9,42,6,78,7];
array_splice($sonlar,2,2);
print_r($sonlar);
// Multidimensional Arrays
$users = [
    ["ism" => "ali", "familiya" => "ozodov", "t_yili" => 1986],
    ["ism" => "odilbek", "familiya" => "komilov", "t_yili" => 1998],
    ["ism" => "bekzod", "familiya" => "masharipov", "t_yili" => 1982],
];
$son = [[3,6,4,[2,8,4]],6,9,2];
print_r($users);
echo $users[1][ 'ism'];
echo "\n";
foreach($users as $item){
    echo $item['ism'].",";
}
?>