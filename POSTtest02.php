<?php
//post
if ($_POST["User"] == NULL )
{
  print "請輸入帳號";
}
if($_POST["Pass"] == NULL)
{
    print "請輸入密碼";
}

$username = $_POST["User"];
$userpassword = $_POST["Pass"];
$userphone = $_POST["choicephone"];

switch($userphone){
    case "iphone":
        print "你的手機是IPHONE"; 
    break;
     case "htc":
        print "你的手機是HTC";
     break;
    case "sony":
        print "你的手機是SONY";
    break;

}
if ($username == "hello" and $userpassword == "0000"){

    print "yourName is $username</br>";
    print "yourPassword is $userpassword<br>";
}
else{
    print "Login fault";
}
?>
