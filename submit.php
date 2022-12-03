<?php

$user="maruf";
$pass=1234;

echo $userName= $_REQUEST['loginUser'];
echo $password= $_REQUEST['loginpassword'];

if($userName==$user && $password==$pass){
    echo "You r in right page";
}else{
    echo "You r in worng page";
}

?>