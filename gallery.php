<?php
	
	// Version 1

	$address = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/images/";
	$images = array_diff(scandir(getcwd() . "/images", 1), array('..', '.'));
	$gallery = "";

	$x = 0;
	$gallery .= "<center><div><button class='galleryback' onclick=\"gallery('back');\"> </button><div class='gallery'>";
	foreach ($images as $image)
	{
		$gallery .= "<img src='" . $address . $image . "' class='galleryimage' alt='image' id='gallery" . $x . "'>";
		$x++;
	}
	$gallery .= "</div><button class='galleryforward' onclick=\"gallery('forward');\"> </button></div></center>";

?>

<html>
	<head>
		<title> Gallery </title>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>
	<body>
		<?php echo $gallery; ?>
		<script> maximage = <?php echo $x-1 ?>; </script>
		<script src='script.js'></script>
	</body>
</html>