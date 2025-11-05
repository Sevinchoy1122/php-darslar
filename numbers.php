<?php 
$int = 5;
$kasr = 16.5;
$string_number = "14";
//integer
var_dump(is_int($int));
var_dump(is_int($kasr));
var_dump(is_int($string_number));
//Float
var_dump(is_float($int));
var_dump(is_float($kasr));
var_dump(is_float($string_number));
//Number
var_dump(is_numeric($int));
var_dump(is_numeric($kasr));
var_dump(is_numeric($string_number));
//string
var_dump(is_string(34));
//****************************** */
$a = 5;         //integer
$b = 5.34;      //float
$c = "hello";   //string
$d = true;      //boolean

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
// To verify the type of any object in PHP, use the var_damp() function:
var_dump($a);    
var_dump($b);
var_dump($c);
var_dump($d);
//*********************************** */
$a = 5;         //integer
$b = 5.34;      //float
$c = "hello";   //string
$d = true;      //boolean

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
//********************************** */
$a = 5;         //integer
$b = 5.34;      //float
$c = "hello";   //string
$d = true;      //boolean

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
//********************************** */
echo pi();
echo "\n";
echo min(5,46,2,8,45,-6,-45,12,0);
echo "\n";
echo max(5,45,2,9,7,12,32,-47,0);
echo "\n";
echo abs(-6);
echo "\n";
echo sqrt(64);

echo "\n";
echo(round(0.60));
echo "\n";
echo(round(0.49));
echo "\n";

?>