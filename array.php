<?php
//走訪陣列foreach
$score = array(10,20,30,40);
$total01 = 0;
$total02 = 0;
foreach($score as $element){
    print "$element ";
    $total01 += $element ;//total=total+elemnt
}
print "</br>";
print "total=$total01";
print "</br>";

for($i=0;$i<count($score);$i++){
    print "$score[$i] ";
    $total02 += $score[$i];
}
print "</br>";
print "total=$total02";
//陣列反轉
print "</br>";
$SetArray = array(1,2,3,4);
$ReverseArray= [];
$ReverseArray = array_reverse($SetArray);
print_r($SetArray);
print "</br>";
print_r($ReverseArray);
print "</br>";

//依照函數參數設定不定長度的陣列
print "</br>";
function sum(){
    $total = 0;
    $count = func_num_args();//取得參數個數
    echo "參數個數:$count<br/>";
    $array = func_get_args();//取得參數陣列
    foreach($array as $element){

        $total+= $element;
    }
    for($i=0;$i<$count;$i++){

        $para = func_get_arg($i);
        print "參數$i=>$para  ";
    }
print "</br>";
print $total;
}
sum(60,70,80);

//陣列插入
$OringArray = array(1,2,3);
print "</br>";
print_r($OringArray);
$InsertArray = array(5,6,7);
print "</br>";
print_r($InsertArray);
print "</br>";

array_splice($OringArray,1,0,$InsertArray);
print_r($OringArray);
print "</br>";

//陣列刪除
$DeleteArray = array(5,10,15);
foreach($DeleteArray as $key => $element)
{
    if($element == 15)
    {
        unset($DeleteArray[$key]);
    }
}
print_r($DeleteArray);
print "</br>";
print_r(array_values($DeleteArray));
?>