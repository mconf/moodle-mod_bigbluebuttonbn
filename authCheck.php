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

	$headers = get_headers($requestAddress);

	foreach ($headers as $hdr) {
		header($hdr);
	}

	readfile($requestAddress);



// 	$requestAddress = 'http://127.0.0.1/proxy'.$_REQUEST['file'];
// // create a new cURL resource
// 	$ch = curl_init();

// // set URL and other appropriate options
// 	curl_setopt($ch, CURLOPT_URL, $requestAddress);
// 	curl_setopt($ch, CURLOPT_HEADER, 0);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// // grab URL and pass it to the browser
// 	$urlContent = curl_exec($ch);

// // Check if any error occured
// 	if(!curl_errno($ch))
// 	{
// 		$info = curl_getinfo($ch);


// 		foreach ($info as $key => $hdr) {
// 		  	// header($hdr);
// 			if(!is_array($hdr)){
// 				$newHeader = $key.": ".$hdr;
// 				error_log($newHeader,0);
// 				header($newHeader);
// 			}

// 		}

// 		echo $urlContent;
// 	}

// // close cURL resource, and free up system resources
// 	curl_close($ch);
}
else {
	error_log(print_r("else",true));
	http_response_code(401);
}

?>