<html>
<head></head>
<body>
	<?php
	
	function partition(&$my_array,$low,$high)
	{
		$pivot=$my_array[($low+$high)/2];

		while ($low <= $high) 
		{        
			while ($my_array[$low] < $pivot)             
				$low++;
			while ($my_array[$high] > $pivot)
				$high--;
			if ($low <= $high) {
				swap($my_array[$low], $my_array[$high]);
				$tmp = $my_array[$low];
				$my_array[$low] = $my_array[$high];
				$my_array[$high] = $tmp;
				$low++;
				$high--;
			}
		}
		return $low;
	}

	function quickSort(&$my_array, $low, $high)
	{
		$index = partition($my_array,$low,$high);
		if ($low < $index - 1)
			quickSort($my_array, $low, $index - 1);
		if ($index < $high)
			quickSort($my_array, $index, $high);
	}
