<?php
$s=array(1,2,3,4,5,6,7,7,6,4,88,66);
echo $s[0];
echo "\n";
$s[0]=15;
echo $s[0];
$cars= array("Volvo","BMW","Toyota");
foreach ($cars as $x) {
    echo "$x <br>";
echo "\n";
}
$car =["brand" => "Cobalt", "Model"=> "chevrolet","year"=>2025];
foreach ($car as $key => $value) {
    echo "$key ->->-> $value \n";
}
?> 
    