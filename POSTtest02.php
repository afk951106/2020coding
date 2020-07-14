<?php
//post
if (empty($_POST["User"]))
{
  print "請輸入帳號</br>";
}
else
{
    $username = $_POST["User"];
    print "你的帳號為".$username."</br>" ;
}

if(empty($_POST["Pass"]))
{
    print "請輸入密碼</br>";
}
else
{
    $userpassword = $_POST["Pass"];
    print "你的密碼為".$userpassword."</br>" ;
}

if (empty($_POST["choicephone"]))
{
    $userphone = "iphone";
}
else
{
$userphone = $_POST["choicephone"];
}
switch($userphone){
    case "iphone":
        print "你的手機是IPHONE</br>"; 
    break;
     case "htc":
        print "你的手機是HTC</br>";
     break;
    case "sony":
        print "你的手機是SONY</br>";
    break;

}

?>
