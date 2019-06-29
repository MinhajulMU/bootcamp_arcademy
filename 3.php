<?php 


function cetakSegitiga($n) 
{ 
	for ($i = 1; $i <= $n; $i++) 
	{ 
		for ($j = 1; $j < $i; $j++) 
		{ 
			echo " "; 
		} 
		for ($j = 1; $j <= ($n * 
			2 - (2 * $i - 1)); $j++) 
		{ 

			if ($i == 1 || $j == 1 || 
				$j == ($n * 2 - (2 * $i - 1))) 
			{ 
				echo "*"; 
			} 
			else
			{ 
				echo " "; 
			} 
		} 
		echo "\n"; 
	} 
} 

	$n = 6; 
	cetakSegitiga($n); 


?> 
