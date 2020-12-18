<?php
if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once('include/entryPoint.php');
//echo $sugar_config['gproconnext_url']; die;
$encoded_file = $_POST['file'];
$resourceId = $_POST['resourceId'];
$referralDomain = $_POST['referralDomain'];
if($referralDomain == $sugar_config['gproconnext_url']) {
    $uploadDirFile = 'upload/' . $resourceId . '_image_c';
    $decoded_file = base64_decode($encoded_file);
    /* Now you can copy the uploaded file to your server. */
    $fileUploadStatus = file_put_contents($uploadDirFile, $decoded_file);
}
?>