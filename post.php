<?php
	$url = 'http://127.0.0.1/Formation';
	$data = array('nom' => 'Formation1', 'description' => 'Formation pour', 'prix' => '30 000Ar', 'convention' => '20');

	
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) {  }

	var_dump($result);
?>