<?php
    if(!isset($_GET['size'])) $_GET['size'] = 44;
    if(!isset($_GET['text'])) $_GET['text'] = "Hello, world!";

	 $font = "$_GET[font]";
	 $textcolor = "$_GET[textcolor]";
	 
	 
	 
	 if( eregi( "([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})", $textcolor, $textrgb ) )
{$c1 = hexdec( $textrgb[1] );   $c2 = hexdec( $textrgb[2] );   $c3 = hexdec( $textrgb[3] );}


	
	
    $size = imagettfbbox($_GET['size'], 0, $font, $_GET['text']);
	
    $xsize = abs($size[0]) + abs($size[2]);
    $ysize = abs($size[5]) + abs($size[1]);

	
	
	
	
    $image = imagecreate($xsize + 5, $ysize);
    $blue = imagecolorallocate($image, 255, 255, 255);
    $white = ImageColorAllocate($image, $c1, $c2, $c3);
    imagettftext($image, $_GET['size'], 0, abs($size[0]), abs($size[5]), $white, $font, $_GET['text']);

	
	
	
	
	
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>



