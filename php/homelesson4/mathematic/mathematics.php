<?php


function countingMaxNumbers($arr) : int
{
	rsort($arr);
	$count = 0;
	for($i = 0; $i < count($arr); $i++)
	{
		if($arr[$i] == $arr[0])
		{
			$count++;
		}
		else
		{
			break;
		}
	}
	return $count;
}