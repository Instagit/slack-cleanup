#!/usr/bin/env php
<?php

$timestamp = strtotime('-1 months');
$token_list = [
	'name' => 'token'
];

date_default_timezone_set('GMT');

foreach ($token_list as $name => $token) {
	echo "Deleting files for " . $name . "...\n";
	delete_files($token);
}

function slack_api_call($token, $function, $options = []) {
	$response = file_get_contents('https://slack.com/api/' . $function . '?' . http_build_query(array_merge(['token' => $token],$options)));
	return json_decode($response, true);
}

function delete_files($token) {
	global $timestamp;
	// get file names
	$files = slack_api_call($token, 'files.list', ['ts_to' => $timestamp]);
	// delete files
	foreach ($files['files'] as $file) {
		$response = slack_api_call($token, 'files.delete', ['file' => $file['id']]);
		echo 'file ' . $file['id'] . ' deleted: ' . $file['permalink'] . PHP_EOL;
	}
}
