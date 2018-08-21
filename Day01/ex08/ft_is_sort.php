<?php
	function ft_is_sort($arr)
	{
		$mas = $arr;
		sort($mas);
		if ($mas == $arr)
			return true;
		else
			return false;
	}
?>
