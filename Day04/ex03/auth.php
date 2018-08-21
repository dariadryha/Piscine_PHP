<?php
function auth($login, $passwd){
	if (file_get_contents("../private/passwd") === false)
		return (false);
	$arr = unserialize(file_get_contents("../private/passwd"));
	foreach($arr as $k){
		if ($login === $k["login"] && hash("Whirlpool", $passwd) === $k["passwd"]){
			return (true);
		}
	}
	return(false);
}
?>