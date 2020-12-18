<?php
/*
 * Serve resource image file to public
 */
if (!empty($_GET['id']) && !empty($_GET['type']))
{
	$resource_id = trim($_GET['id']);
	$type = trim($_GET['type']);
	$image_name  = $resource_id .'_'. $type;
	$imagePath   = __DIR__ . "/upload/" . $image_name;

	ob_get_clean();
	if (file_exists($imagePath))
	{
		$size = getimagesize($imagePath);

		$fp = fopen($imagePath, 'rb');

		if ($size && $fp)
		{
			header('Content-Type: ' . $size['mime']);
			header('Content-Length: ' . filesize($imagePath));
			fpassthru($fp);
			exit;
		}

	}

}

header('File not found!', true, 404);
exit;