<?php
include 'Speedometer.php';

echo number_format(Speedometer::convertkmtomiles('10'), 2, ',');
echo '<br>';
echo number_format(Speedometer::convertmilestokm(10), 2, ',');
//$nombre_format_francais = number_format($number, 2, ',', ' ');