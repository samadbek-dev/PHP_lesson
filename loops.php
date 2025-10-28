<?php
$a=2155;
$b=$a;
$c=0;
// $d=0;
// while ($b>=10) {
//     $b=(int) ($b/10);
//     $c+=1;
// }
// $lengh=10**$c;
// while ($a >= 1) {
//     $d+=(int) ($a/$lengh);
//     $a=(int) ($a%$lengh);
//     $lengh/=10;
// }
// echo $d; 
while ($b>0) {
    $c+=$b%10;
    $b=(int) ($b/10);
}
echo $c;
?>