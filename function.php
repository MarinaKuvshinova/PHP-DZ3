<?php
$fp = fopen("users.txt","r");
$arr=[];
while(!feof($fp)) {
    $arr[] = fgets($fp);
}
$count = count($arr);
fclose($fp);



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}