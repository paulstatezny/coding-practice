<?php 
	function printFizzBizz() {
		for ($i = 1; $i <= 100; $i++) {
			if ($i % 5 === 0 && $i % 3 === 0) {
				echo "FizzBizz!";
			} elseif ($i % 5 === 0) {
				echo "Bizz!";
			} elseif ($i % 3 === 0) {
				echo "Fizz!";
			} else {
				echo $i;
			}
		};
	}

	echo printFizzBizz();