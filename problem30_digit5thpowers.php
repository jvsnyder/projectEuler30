<?php

/*
Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:

1634 = 14 + 64 + 34 + 44
8208 = 84 + 24 + 04 + 84
9474 = 94 + 44 + 74 + 44
As 1 = 14 is not a sum it is not included.

The sum of these numbers is 1634 + 8208 + 9474 = 19316.

Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.*/


//start index from 10000 - 99999
$zero = 100000;
$first = 10000;
$second = 1000;
$third = 100;
$fourth = 10;

$remainder = 0;
$power = 5;
$sum = 0;
for($index = 1; $index < 1000000; $index++)
{
	
	//get the remainder
	$hundredThousand = (int)($index / $zero);
	$hundredThousand = pow($hundredThousand, $power);
	$remainder = $index % $zero;
	
	$tenThousand = (int)($remainder / $first);
	$tenThousand = pow($tenThousand, $power);
	$remainder = $remainder % $first;
	//$tenThousand = (int)($index / $first);e
	//$tenThousand = pow($tenThousand, $power);
	//$remainder = $index % $first;
	
	$thousand = (int)($remainder / $second);
	$thousand = pow($thousand, $power);
	$remainder = $remainder % $second;
	
	//$thousand = (int)($index / $second);
	//$thousand = pow($thousand, $power);
	//$remainder = $index % $second;
	
	
	$hundred = (int)($remainder / $third);
	$hundred = pow($hundred, $power);
	$remainder = $remainder % $third;
	
	$ten = (int)($remainder / $fourth);
	$ten = pow($ten, $power);
	$remainder = $remainder % $fourth;

	
	$one = pow($remainder, $power);
	
	$result = $hundredThousand + $tenThousand + $thousand + $hundred + $ten + $one;
	
	if($index === $result)
	{
		
		$sum += $result;
		echo $result . "\n";
	}
	
	
}
$sum = $sum - 1;
echo "sum: " . $sum;
?>