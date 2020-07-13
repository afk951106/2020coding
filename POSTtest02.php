<?php
//post
$username = $_POST["User"];
$userpassword = $_POST["Pass"];

if ($username == "hello" and $userpassword == "0000"){

    print "yourName is $username</br>";
    print "yourPassword is $userpassword<br>";
}
else{
    print "Login fault";}
?>
