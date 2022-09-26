<?php
/*
echo "<b>1</b><hr>";
$m = 'hello';
$n = &$m;
$b = "world$b";
echo @$flag;
echo $a. " : ".$b;
*/
echo "<br><b>2</b><hr>";

 function test($msg) 
{
 echo "My message : $msg";   
}
    $var1 = "test";
    $var1("will this work ");
    echo $var1;

echo "<br><b>3</b><hr>";
$a=array(0=>"red",1=>"green",2=>"blue");
echo array_shift($a)."<br>";
echo 'value at 1 is $a[1]';
print_r ($a);

echo "<br><b>4</b><hr>";
$a = "Open Source Technology"; 
$c = 3.14; 
$d = 7; 
print "<br> $a $a[5] <hr>"; 
echo $c + $d . "<hr>";

echo "<br><b>5</b><hr>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode("+",$arr)."<br>"; 
echo $arr[1];
?>