<!--Detect the mask-->
<?php
require 'autoload.php';

$client = new Aws\Rekognition\RekognitionClient([
	'version' => 'latest',
	'region' => 'us-east-1',
	'crdentials' => [
		'key' => '',
		'secret' => '',
	]
]);

$result = $client -> detectLabels([
	'Image' => [
		'Bytes' => file_get_contents(".jpg"),
	],
	'MaxLabels' => 10,
	'MinConfidence' => 20,
]);

print_r($result);
?>