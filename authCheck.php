<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');

if (isloggedin()){ 
	$rootAddress = 'http://127.0.0.1/proxy/';

	$getMeetingId = optional_param('getMeeting', 0, PARAM_INT); //informa de deve buscar o meetingid
	
	$requestAddress= $rootAddress.$_REQUEST['file'];

	if($getMeetingId){
		$urlReferer = $_SERVER['HTTP_REFERER'];	
		if($urlReferer){
			$parts = parse_url($urlReferer);
			parse_str($parts['query'], $query);
			$file = $query['file'];

			$preUrl = substr($file, 0, strrpos($file, '/'));
			$requestAddress= $rootAddress.$preUrl.'/'.$_REQUEST['file'];
		}
	}

	$ch = curl_init();

// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $requestAddress);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$urlContent = curl_exec($ch);

	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($urlContent, 0, $header_size);
	$body = substr($urlContent, $header_size);


// close cURL resource, and free up system resources
	curl_close($ch);

	$newheaders = explode("\n", $header);
	foreach ($newheaders as $hdr) {
		header($hdr);
	}

	echo $body;

}
else {
	error_log(print_r("else",true));
	http_response_code(401);
}

?>