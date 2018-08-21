#!/usr/bin/php
<?php
	function get_image_url($file)
	{
		$res = array();
		foreach ($file as $value)
		{
			if (preg_match("/<img(.*)>/", $value, $img))
			{
				if (preg_match("/(?<=)src=\"(.*)\"/U", $img[1], $url))
				{
					if (preg_match("/http*/", $url[1]))
						array_push($res, $url[1]);
				}
			}
		}
		return ($res);
	}

	function ft_create_dir($name)
	{
		$dir = preg_replace("/http:\/\//", "", $name);
		if (file_exists($dir))
			rmdir($dir);
		mkdir($dir);
		return ($dir);
	}

	function ft_create_img($url, $name_img)
	{
		$fd = curl_init($url);
		curl_setopt($fd, CURLOPT_HEADER, 0);
		curl_setopt($fd, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($fd, CURLOPT_BINARYTRANSFER,1);
		$data = curl_exec($fd);
		curl_close ($fd);
		if (file_exists($name_img))
			unlink($name_img);
		$fp = fopen($name_img,'x');
		fwrite($fp, $data);
		fclose($fp);
	}

	if ($argc > 1)
	{
		if (!$file = file($argv[1]))
			exit(1);
		$url = get_image_url($file);
		if ($url)
		{
			$dir = ft_create_dir($argv[1]);
			foreach ($url as $value)
			{
				preg_match("/[^\/]*$/", $value, $name_img);
				ft_create_img($value, $dir."/".$name_img[0]);
			}
		}
	}
?>
