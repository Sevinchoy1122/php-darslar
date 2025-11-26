<?php 
//Fayldan ma'lumot o'qish.
$file = fopen("test.txt","r");
$contents = fread($file,filesize("test.txt"));
fclose($file);
echo $comtent . "<br>";
// Faylga ma'lumot yozish.
$file = fopen("data.txt", "w");
fwrite($file, "Faylga ma'lumot yozildi");
fclose($file);
echo "faylga ma'lumot yozildi";
// Faylga ma'lumot qo'shish
$file = fopen("data.txt", "a");
fwrite($file, "\nYangi ma'lumot qo'shish");
fclose($file);
echo  "Yangi ma'lumot qo'shildi";
// Faylni  mavjudligini  aniqlash.
if (file_exists("test.txt")){
    echo "fayl mavjud";
    unlink ("test.txt");
    echo "fayl o'chirildi<br>!";
}else{
    echo "fayl mavjud emas !";
}
?>