<?php
// Controller temporário!!!

$i1 = DateInterval::createFromDateString('9 hours');
$i2 = DateInterval::createFromDateString('9 hours');

$r1 = sumIntervals($i1, $i2);
$r2 = subtractIntervals($i1, $i2);

print_r($r1);
echo '<br><br>';
print_r($r2);
echo '<br><br>';
print_r(getDateFromInterval($r1));
echo '<br><br>';
print_r(getDateFromInterval($r2));