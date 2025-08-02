<?php
$numbers = [1, 2, 3, 4, 5];

$sum = 0;

foreach($numbers as $number){
    $sum = $sum + $number;
}
echo 'Foreach loop: ',  $sum;

$sum2 = 0;

for($i = 0; $i < count($numbers); $i++){
    $sum2 = $sum2 + $numbers[$i];
}

echo '<br> For loop: ',  $sum2;