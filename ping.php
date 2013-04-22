<?php

	$filename = 'user_data_' . preg_replace('/\D/', '', $_POST['fn']) . '.txt';

	$handle = fopen($filename, 'w');
	fwrite($handle, json_encode($_POST));
	fclose($handle);
