<?php

$nummers = [6,2,10,4,3,6,9,5,13,7,4,2,5];
//$nummers = [10,2,6];
$count = count($nummers);

print_r ($nummers);
echo "<br>";
$switch = 1;
$supermegahyperswitchtotaal = 0;
$supermegahyperwhiletotaal = 0;
$supermegahyperfortotaal = 0;

 while ($switch != 0){
    $y = 1;
    $switch = 0;
    for ($x=0 ; $x<$count ; $x++){
            if ($nummers[$x] > $nummers[$y]){
                $switchOutput = [$nummers[$y], $nummers[$x]];
                $nummers[$x] = $switchOutput[0];
                $nummers[$y] = $switchOutput[1];
                $switch++;
                $supermegahyperswitchtotaal++;
            }
            if ($y < $count-1){
            $y++;
            }
            $supermegahyperfortotaal++; 
        }
        $supermegahyperwhiletotaal++;
 }

print_r ($nummers);

echo "<br><br>";
//echo $switch;
echo $supermegahyperswitchtotaal++;
echo "<br>";
echo $supermegahyperwhiletotaal;
echo "<br>";
echo $supermegahyperfortotaal;

//
//foreach ($nummers as $key=>$value){
////    if ($key=>$value > $key+1=>$value){
////        $switch++;
////    }
//}
//
////echo $switch;