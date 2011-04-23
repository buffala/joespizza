<?php
session_start();
$img = imagecreatetruecolor(80,30);

$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img,0,0,0);
$red = imagecolorallocate($img, 255,0, 0);
$pink = imagecolorallocate($img, 200, 0,150);

function randomString($length){
	// Changed Characters to avoid confusion (Tom)
	$chars="abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789";
	srand((double)microtime()*1000000);
	$str="";
	$i=0;
		while($i<=$length){
		$num=rand()%33;
		$tmp=substr($chars, $num, 1);
		$str=($str.$tmp);
		$i++;
	}
	return $str;
	}


imagefill($img, 0, 0, $black);

$string=randomString(rand(4,7));
$_SESSION['string']=$string;

imagettftext($img, 12,0,15,15,$white, "arial.ttf", $string);
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);