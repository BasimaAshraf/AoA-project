<html>
<head></head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS Bin</title>
<style>
body {padding-top:50px} 
</style> 
</head>
<body>
<input type="text" id="text1"></input>
<input type="button" id="button1" value="Add" onclick="add_element_to_array();"></input>
<input type="button" id="button2" value="Display" onclick="display_array();"></input>
<div id="Result"></div> 


<script > 
var x = 0;
var array = Array();

function add_element_to_array()
{
 array[x] = document.getElementById("text1").value;
 alert("Element: " + array[x] + " Added at index " + x);
 x++;
 document.getElementById("text1").value = "";
}

function display_array()
{
   var e = "<hr/>";   
    
   for (var y=0; y<array.length; y++)
   {
     e += "Element " + y + " = " + array[y] + "<br/>";
   }
   document.getElementById("Result").innerHTML = e;
}



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
	function PrintArr($my_array,$size)
	{
		for($i=0; $i<$size; $i++)
		{
			echo  $my_array[$i].', ';
		}
	}
	$my_array = array(3, 0, 2, 5, 9, 4, 1);
	$size=count($my_array);
	echo 'Original Array : '.implode(',',$my_array);
	$low=0;
	$high=$size-1;
	echo "<br>";
	quickSort($my_array,$low,$high);
	PrintArr($my_array,$size);

	?>
	?>
	
	</script>
   </body>
</html>
