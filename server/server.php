<?php

header('Content-type: application/json; charset=utf-8');

$result = array(
	'result' => 'Hello, world!',
	'error'  => 'No error.'
);

sleep(2);

echo json_encode($result);

?>