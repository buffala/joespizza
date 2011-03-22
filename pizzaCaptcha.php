

<?php
$img = imagecreatetruecolor(100,45);

$grey = imagecolorallocate($img, #CCCCCC);
$blue = imagecolorallocate($img, #0000CC);
$purple = imagecolorallocate($img, #660099);
$green = imagecolorallocate($img, #00CC00);
$gold = imagecolorallocate($img, #FFCC00);

function randomString($length){
	$chars = "abcdefghijkmnopqrstuvwx023456789";
	srand((double)microtime()*1000000);
	$str = "";
	$i = 0;
	
		while($i <= $length){
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$str = $str . $tmp;
			$i++;
		}
	return $str;
}
for($i=1;$i<=rand(1,5);$i++){
	$color = (rand(1,2) == 1) ? $blue : $purple;
	imageline($img,rand(8,80),rand(8,30),rand(8,80)+5,rand(8,20)+6, $color);
}

imagefill ($img, 0,0, $gold);
$string = randomString(rand(8,12));
$_SESSION['string'] = $string;

imagettftext($img, 16, 90, 0, 0, $green, "arial.ttf", $string);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);



