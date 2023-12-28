<?php

$age = 5;

//echo $age > 18 ? "You are over 18" : ( $age == 18 ? "You are 18 years old" : "You are under 18" );

//echo ( $age === 10 ) ? "ok" : (  ( $age === 9 ) ? "it is works" : "sorry" );

//fibonachi siriz

// $veryold = 0;
// $old     = 1;
// $new     = 1;

// for ( $i = 0; $i < 10; $i++ ) {
//     # code...
//     echo $veryold . " ";
//     $old     = $new;
//     $new     = $old + $veryold;
//     $veryold = $old;
// }
function square_sum($numbers): int {
	// Write your code here...
	$n = 0;
	// foreach ($numbers as $number) {
	// 	// $n += pow(2, $number);
	// 	$n = pow(2, $number);
	// }

	// return $n;
	return
		$n = pow(
			2,
			$numbers
		);
}

// print_r(square_sum([1,2,3]));
// print_r(square_sum(8));

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $oddNumbers = array_filter($numbers, function ($number) {
// 	return $number % 2 != 0;
// });

// print_r($numbers);
$str = "hello world,how are you?";
// $parts = strtok($str, " ,");
// while ($parts !== false) {
// 	# code...
// 	echo $parts;
// 	echo "<br>";
// 	$parts = strtok(" ,");
// }

// stang search
// echo strpos($str, "how");
// echo stripos($str, "How");
