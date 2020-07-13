<?php
//Assign by reference 參考指定敘述
$nickname = "小翰";
$name = &$nickname ;//變數前增加&
echo "姓名".$name."</br>";
echo "暱稱".$nickname."</br>";
echo "</br>";
$name = "李威翰";
echo "姓名".$name."</br>";
echo "暱稱".$nickname."</br>";
// $name 與 $mickname 共用記憶體位置
echo "</br>";
echo "動態變數</br>";

//Variable Variable Name動態變數
$username = "myname";
$$username = "李威";
$anothname;
echo $username."</br>";
echo $myname."</br>";
echo $anothname = ${$username}."</br>";

//常數宣告
echo "</br>";
echo "常數宣告</br>";
define("Pi",3.14);
print 100 *Pi."</br>";;

//錯誤控制運算子
echo "</br>";
echo "錯誤控制運算子@</br>";
$x=10;
$y=0;
$r;
$r=(@$x/$y);
//10除以0 會產生錯誤 使用@就會停止彈出錯誤







?>