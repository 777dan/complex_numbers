<?php
include "Complex.php";
$complex = new Complex(10, 2, 3, 3);
$complex->plus($complex);
echo "\n";
$complex->minus($complex);
echo "\n";
$complex->multiplication($complex);
echo "\n";
$complex->division($complex);