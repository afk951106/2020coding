<?php
//傳值
function callbyValue($c){
    $c= $c+2;
}
//傳址
function callbyReference(&$c){
    $c=$c+2;
}
$a = 1;//變數初始直
print "初始值\$a=".$a."</br>";
print "傳值callbyValue".callbyValue($a)."</br>";
print "傳值後\$a=".$a."</br>";
print "傳址callbyReference".callbyReference($a)."</br>";
print "傳址後\$a=".$a."</br>";

//預設參數
print "</br>";
print "預設參數</br>";
function volume($length,$width = 10,$height = 5){
    return $length * $width * $height;
}
print volume(10)."</br>";
print volume(10,20)."</br>";

//靜態變數static
print "</br>";
print "靜態變數Static</br>";
function staticVar(){
    static $count = 0;
    $count+=2;
    return $count;
}
function nonstaticVar(){
    $count = 0;
    $count+=2;
    return $count;
}
$v1 = nonstaticVar();
$v2 = nonstaticVar();
$v3 = nonstaticVar();
print "不使用static$v1,$v2,$v3</br>";
$v1 = staticVar();
$v2 = staticVar();
$v3 = staticVar();
print "使用static$v1,$v2,$v3</br>";

//global變數



?>